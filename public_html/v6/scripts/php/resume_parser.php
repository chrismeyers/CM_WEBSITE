<?php
class ResumeParser {
  private $items = array(
    "Experience" => array(),
    "Education" => array(),
    "TechnicalSkills" => array()
  );

  /**
   * Parses each section of a LaTeX file and stores in the $items member array.
   * The input LaTeX file must contain BEGIN and END tags for each of the items
   * included in the $items member array.
   * 
   * @param $file the path to the .tex file to be parsed
   */
  public function parseLatexFile($file) {
    $begin = "% BEGIN ";
    $end = "% END ";

    if($resumeTex = fopen($file, "r")) {
      $section = "";
      while(($line = fgets($resumeTex)) !== false) {
        $line = trim($line);
        if(strpos($line, $begin) !== false) { // $line contains $begin (new section)
          $section = substr(trim($line), strlen($begin));
        }
        else if($section !== "" && strpos($line, $end) === false) { // Between $begin and $end
          if(array_key_exists($section, $this->items) && $line !== "") {
            array_push($this->items[$section], $line);
          }
        }
        else { // Between $end and $begin
          $section = "";
          continue;
        }
      }
      fclose($resumeTex);
    }
    else {
      return false;
    }

    return true;
  }

  /**
   * Parses a complex section of the input LaTeX file. A "complex" section is
   * defined as a section containing a list of entries where each entry contains
   * a two row header followed by a list of zero or more amplifying items.
   *
   *   * [Company | School]                                   Location
   *     [Title | Degree]                                  Start - End
   *       o [Optional] Informational item...
   *
   * @param $section a string specifying the section to be parsed.
   * @return an array of the parsed information.
   */
  public function parseComplexSection($section) {
    $entries = array();
    $entry = array(
      "firstLine" => array(),
      "secondLine" => array(),
      "info" => array()
    );
    $firstLinePattern = '{\textbf{';
    $secondLinePattern = '{\emph{';
    $endPattern = '}}';
    $infoPattern = '\item';

    foreach($this->items[$section] as $i=>$line) {
      if(strpos($line, $firstLinePattern) !== false) {
        $beginPatternIndex = strpos($line, $firstLinePattern) + strlen($firstLinePattern);
        $endPatternIndex = strpos($line, $endPattern);

        $cleaned = substr($line, $beginPatternIndex, $endPatternIndex);
        $cleaned = str_replace($endPattern, "", $cleaned);
        $cleaned = $this->cleanString($cleaned);

        array_push($entry["firstLine"], $cleaned);
      }
      else if(strpos($line, $secondLinePattern) !== false) {
        $beginPatternIndex = strpos($line, $secondLinePattern) + strlen($secondLinePattern);
        $endPatternIndex = strpos($line, $endPattern);

        $cleaned = substr($line, $beginPatternIndex, $endPatternIndex);
        $cleaned = str_replace($endPattern, "", $cleaned);
        $cleaned = $this->cleanString($cleaned);

        array_push($entry["secondLine"], $cleaned);
      }
      else if(strpos($line, $infoPattern) !== false) {
        if($i == 0) {
          continue;
        }
        else if(strlen($line) == strlen($infoPattern)) { // Beginning of new entry (blank $infoPattern line)
          array_push($entries, $entry);
          $entry = array(
            "firstLine" => array(),
            "secondLine" => array(),
            "info" => array()
          );
        }
        else {
          $cleaned = substr($line, ($infoPattern + strlen($infoPattern) + 1));
          $cleaned = $this->cleanString($cleaned);

          array_push($entry["info"], $cleaned);
        }
      }
    }

    // The loop is exited before the last item can be added. Add it here.
    array_push($entries, $entry);

    return $entries;
  }

  /**
   * Parses a simple section of the input LaTeX file. A "simple" section is
   * defined as a section containing just a list of one or more items.
   *
   *   * Informational item...
   *   * [Optional] Another informational item...
   *
   * @param $section a string specifying the section to be parsed.
   * @return an array of the parsed information.
   */
  public function parseListSection($section) {
    $skills = array();

    $itemPattern = '\item';

    foreach($this->items[$section] as $line) {
      if(strpos($line, $itemPattern) !== false) {
        $cleaned = substr($line, ($itemPattern + strlen($itemPattern) + 1));
        $cleaned = $this->cleanString($cleaned);

        array_push($skills, $cleaned);
      }
    }

    return $skills;
  }

  /**
   * Removes any unique LaTeX syntax from a given string.
   *
   * @param $in the raw string
   * @return a sanitized string
   */
  private function cleanString($in) {
    $out = str_replace("\CPP", "C++", $in);
    $out = str_replace("\break", "", $out);
    $out = str_replace("--", "&ndash;", $out);
    $out = str_replace("\\", "", $out);

    return $out;
  }
}
