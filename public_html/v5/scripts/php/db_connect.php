<?php
    function getConnection() {
        $login = parseLogin();
        $con = mysqli_connect($login["host"], $login["user"], $login["pass"], $login["db"]);
        if(mysqli_connect_errno()) {
          echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
          die();
        }
        return $con;
    }

    function parseLogin($mode) {
        $info = [];
        $file = fopen("db/login_config.txt", "r");
        $i = 0;
        $mode = "none";

        if ($file) {
            while (($line = fgets($file)) !== false) {
                $parts = explode(" ", $line);
                $parts[0] = str_replace(array("\r", "\n"), '', $parts[0]);

                if($i == 0) {
                    $mode = $parts[0];
                }
                elseif(strcmp($parts[0], $mode) == 0) {
                    $info["host"] = $parts[1];
                    $info["user"] = $parts[2];
                    $info["pass"] = $parts[3];
                    $parts[4] = str_replace(array("\r", "\n"), '', $parts[4]);
                    $info["db"] = $parts[4];
                    break;
                }
                $i++;
            }
            fclose($file);
        }
        return $info;
    }
