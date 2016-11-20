<div id="my-projects" class="content">
            <div class="section-header">Projects</div>
            <div class='content-text'>
            <?php
                $result = mysqli_query($con, "SELECT * FROM `projects`");

                for($i = 1; $i <= mysqli_num_rows($result); $i++) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $title = $row["title"];
                    $web_url = $row["web_url"];
                    $code_url = $row["code_url"];
                    $date = $row["date"];
                    $lang = $row["lang"];
                    $info = $row["info"];
                    $role = $row["role"];
                    $stat = $row["stat"];
                    $abbrev = $row["abbrev"];

                    echo "<div class='proj'>";
                        if($i == 1) {
                            echo "<h2 class='first-header'>" . $title . " ";
                        }
                        else {
                            echo "<h2>" . $title . " ";
                        }
                        echo "<div class='proj-link-block'>";
                            if($web_url != NULL) {
                                echo "<span class='proj-bullets'>&bull;</span>
                                    <a href='" . $web_url . "' target='_blank' class='no-decoration'>
                                        <img src='images/icons/link.png'                                             
                                            onmouseover='this.src = \"images/icons/link_hover.png\"; showProjectString(\"website\", \"" . $abbrev . "\");' 
                                            onmouseout='this.src = \"images/icons/link.png\"; hideProjectString(\"website\", \"" . $abbrev . "\");'
                                            class='proj-link'
                                            alt='Link to Website' 
                                            title='View site'>
                                
                                        <span class='fancytxt' id='slide-website-" . $abbrev . "'>Website</span>
                                    </a>";
                            }

                            echo "<span class='proj-bullets'>&bull;</span>
                                <a href='" . $code_url . "' target='_blank' class='no-decoration'>
                                    <img src='images/social/github.png'
                                        onmouseover='this.src = \"images/social/github_hover.png\"; showProjectString(\"code\", \"" . $abbrev . "\");' 
                                        onmouseout='this.src = \"images/social/github.png\"; hideProjectString(\"code\", \"" . $abbrev . "\");'
                                        class='proj-link'
                                        alt='Link to Code' 
                                        title='View code'>

                                    <span class='fancytxt' id='slide-code-" . $abbrev . "'>Code</span>
                                </a>
                            </div>
                        </h2>
                        
                        <h3>" . $date . "</h3>
                        <div class='projWrapper'>";

                        $images = mysqli_query($con, "SELECT * FROM `projects_images` WHERE abbrev = '" . $abbrev . "'");

                        for($j = 1; $j <= mysqli_num_rows($images); $j++) {
                            $image = mysqli_fetch_array($images, MYSQLI_ASSOC);
                            $url = $image["url"];
                            $title = $image["title"];
                            $orient = $image["orient"];
                            $rel = "";
                            if(mysqli_num_rows($images) > 1) {
                                $rel = "gallery" . $i;
                            }

                            if($j == 1) {
                                echo "<div class='projImages'>
                                        <a class='fancybox no-decoration'
                                           rel='" . $rel . "'
                                           href='" . $url . "'
                                           title='" . $title . "'>
                                            <img src='" . $url . "'
                                                class='projImages-full-img-" . $orient . "'
                                                alt='" . $title . "' 
                                                title='Click to enlarge'>
                                        </a>";
                                    if(mysqli_num_rows($images) > 1) {
                                        echo "<div class='projImages-small'>";
                                    }
                            }
                            else {
                                echo "<a class='fancybox no-decoration'
                                   rel='" . $rel . "'
                                   href='" . $url . "'
                                   title='" . $title . "'>
                                    <img src='" . $url . "'
                                        class='projImages-small-img-" . $orient ."'
                                        alt='Mid size version of my personal website.'
                                        title='Click to enlarge'>
                                    </a>";
                            }
                        }
                        if(mysqli_num_rows($images) > 1) {
                            echo "</div>";
                        }
                        echo "</div>";

                        echo "<div class='projDesc'>
                            <dl>
                                <dt class='dt-mod'><b>Language(s):</b></dt>
                                    <dd>" . $lang . "</dd>
                                        
                                <dt class='dt-mod'><b>Description:</b></dt>
                                    <dd>" . $info . "</dd>
                                        
                                <dt class='dt-mod'><b>My Role:</b></dt>
                                    <dd>" . $role . "</dd>
                                        
                                <dt class='dt-mod'><b>Status:</b></dt>
                                    <dd>" . $stat . "</dd>
                            </dl>
                        </div>
                    </div>";
                    if(mysqli_num_rows($images) > 1) {
                        echo "</div>";
                    }

                    if($i != mysqli_num_rows($result)) {
                        echo "<br /> <hr>";
                    }
                }

                mysqli_close($con);
            ?>

            </div>
        </div>
    </div>
