<div id="contact-me" class="content content-size">
            <div class="section-header section-header-size">Contact</div>

            <div class="content-text">
                <div class="contact-links">
                    <span class="link-txt"><img src="images/social/mark-github.svg" class="link-image-big contact-link-image" alt="GitHub"> <a href="https://github.com/chrismeyers" target='_blank' class="fancytxt">GitHub</a></span>
                    <span class="link-txt"><img src="images/social/linkedin-logo.svg" class="link-image-big contact-link-image" alt="LinkedIn"> <a href="https://www.linkedin.com/in/chris-meyers" target='_blank' class="fancytxt">LinkedIn</a></span>
                    <span class="link-txt"><img src="images/social/facebook-logo.svg" class="link-image-big contact-link-image" alt="Facebook"> <a href="https://www.facebook.com/meyers42" target='_blank' class="fancytxt">Facebook</a></span>
                    <span class="link-txt"><img src="images/social/mail.svg" class="link-image-big contact-link-image" alt="Email"> <a href="mailto:chris@chrismeyers.info" target='_blank' class="fancytxt">chris@chrismeyers.info</a></span>
                </div>

                 <div class="contact-form">
                    <form action="scripts/php/email_form.php" method="post" target="_top">
                        <?php
                        if (!empty($_GET['message'])) {
                            $message = $_GET['message'];
                            
                            if ($message == "resume") {
                                $_SESSION["usercomments"] = "I would like a copy of your résumé.";
                                echo '<div class="errors alert-offset">';
                                echo "<img class='contact-link-image' src='images/icons/info.svg'><div class='contact-alert-text'> To request a PDF version of my résumé, please enter your name, email and any additional information.</div>";
                                echo '</div>';
                            }
                            else if(strcmp($message, "000") != 0) {
                                $err_arr = str_split($message);
                                
                                echo '<div class="errors alert-offset">';
                                if ($err_arr[0] == "1") {
                                    echo "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Name required.</div>";
                                } 
                                if ($err_arr[1] == "1") {
                                    echo "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Email Address format is incorrect.</div>";
                                }
                                if ($err_arr[2] == "1") {
                                    echo "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Email Addresses don't match.</div>";
                                }
                                echo '</div>';
                            }
                            else {
                                echo '<div class="success alert-offset">';
                                echo "<img class='contact-link-image' src='images/icons/check.svg'><div class='contact-alert-text'> Your request has been successfully submitted. Thank you!</div>";
                                echo '</div>';
                            }
                        }
                        ?>

                        <div class="inputs">
                            <div class="name-input">
                                <input id="name-input" class="inputbox-mod" type="text" placeholder="Name" name="name"<?php
                                if (isset($_SESSION["name"])) {
                                    echo ' value="' . $_SESSION["name"] . '">';
                                } else {
                                    echo '>';
                                }
                                ?></div>

                            <div class="email-input">
                                <input id="email1-input" class="inputbox-mod" type="email" placeholder="Primary Email" name="fromemail"<?php
                                if (isset($_SESSION["fromemail"])) {
                                    echo ' value="' . $_SESSION["fromemail"] . '">';
                                } else {
                                    echo '>';
                                }
                                ?></div>
                        
                            <div class="email-confirm-input">
                                <input id="email2-input" class="inputbox-mod" type="email" placeholder="Confirm Primary Email" name="confirmfromemail">
                            </div>
                        </div>

                        <div class="comments comment-input">
                            <textarea class="textarea-mod" name="usercomments" placeholder="Message" maxlength="5000"><?php
                                if (isset($_SESSION["usercomments"])) {
                                    echo $_SESSION["usercomments"] . '</textarea>';
                                } else {
                                    echo '</textarea>';
                                }
                                ?>
                        </div>
                        
                        <div class="buttons button-input">
                            <button class="submit-button" type="submit">Send</button>
                            <button class="submit-button" type="reset" onclick="deleteCookie('PHPSESSID'); window.location='index.php#contact';">Reset</button>                                  
                        </div>
                    </form> 
                </div>
            </div>
        </div>
