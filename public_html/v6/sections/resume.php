<div data-section-name="resume">
    <div class="section-header section-header-size">Résumé</div>
    
    <div class="content-text">
        <?php
            include "scripts/php/resume_parser.php";
            
            $rp = new ResumeParser();
            if(!$rp->parseLatexFile("sections/Meyers_Chris_Resume.tex")) {
                die("Unable to open resume file!");
            }
        ?>
        <h2 class="top">Experience</h2>
        <?php
            $jobs = $rp->parseComplexSection("Experience");

            foreach($jobs as $job) {
        ?>
        <ul>
            <li class="left-column company"><?php echo $job["firstLine"][0]; ?></li>
            <li class="right-column location"><?php echo $job["firstLine"][1]; ?></li>
            <li class="left-column sub-left-column job-title"><?php echo $job["secondLine"][0]; ?></li>
            <li class="right-column tenure"><?php echo $job["secondLine"][1]; ?></li>
            <li class="remove-bullets">
                <ul class="more-info">
                    <?php foreach($job["info"] as $info) { ?>
                    <li class="more-info"><?php echo $info; ?></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
        <?php } ?>

        <br /> <hr>
        
        <?php
            $edu = $rp->parseComplexSection("Education");
            foreach($edu as $school) {
        ?>
        <h2>Education</h2>
        <ul>
            <li class="left-column school"><?php echo $school["firstLine"][0]; ?></li>
            <li class="right-column location"><?php echo $school["firstLine"][1]; ?></li>
            <li class="left-column sub-left-column degree"><?php echo $school["secondLine"][0]; ?></li>
            <li class="right-column tenure"><?php echo $school["secondLine"][1]; ?></li>
        </ul>
        <?php } ?>

        <br /> <hr>
        
        <h2>Technical Skills</h2>
        <ul>
            <?php
                $skills = $rp->parseListSection("TechnicalSkills");
                foreach($skills as $skill) {
            ?>
            <li><?php echo $skill; ?></li>
            <?php } ?>
        </ul> 
    </div>
</div>
