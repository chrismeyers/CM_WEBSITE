<div data-section-name="contact">
    <div class="section-header section-header-size">Contact</div>

    <div class="content-text">
        <div class="contact-methods">
            <div class="contact-social-block">
                <h2 class="first-header">Visit my social media...</h2>
                
                <div class="contact-links">
                    <a href='https://www.facebook.com/meyers42' target='_blank' alt='Facebook' title='Facebook'>
                        <div class='contact-social'>
                            <?php echo file_get_contents("images/v6/social/facebook-logo-contact.svg"); ?>
                            <span class="contact-social-words">/meyers42</span>
                        </div>
                    </a>

                    <a href='https://www.linkedin.com/in/chris-meyers' target='_blank' alt='LinkedIn' title='LinkedIn'>
                        <div class='contact-social'>
                            <?php echo file_get_contents("images/v6/social/linkedin-logo-contact.svg"); ?>
                            <span class="contact-social-words">/chris-meyers</span>
                        </div>
                    </a> 
                
                    <a href='https://github.com/chrismeyers' target='_blank' alt='GitHub' title='GitHub'>
                        <div class='contact-social'>
                            <?php echo file_get_contents("images/v6/social/mark-github-contact.svg"); ?>
                            <span class="contact-social-words">/chrismeyers</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="contact-form-block">
                <h2 class="first-header">...or send me a message directly.</h2>

                <div class="contact-form">
                    <form action="scripts/php/email_form.php" id="contact-form" method="post" target="_top">
                        <?php
                        $textareaMsg = "";

                        if (!empty($_GET["message"])) {
                            $message = $_GET["message"];
                            
                            if($message == "resume") {
                                $textareaMsg = "I would like a copy of your résumé.";
                                echo '<div class="alert alert-offset">';
                                echo "<img class='contact-link-image' src='images/icons/info.svg?v=2'><div class='contact-alert-text'> To request a PDF version of my résumé, please enter your name, email and any additional information.</div>";
                                echo '</div>';
                            }
                            else if($message == "success") {
                                echo '<div class="success alert-offset">';
                                echo "<img class='contact-link-image' src='images/icons/check.svg'><div class='contact-alert-text'> Your message has been sent. Thank you!</div>";
                                echo '</div>';
                            }
                            else if($message == "recaptcha") {
                                echo '<div class="errors alert-offset">';
                                echo "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> A reCAPTCHA error has occurred. Please try again.</div>";
                                echo '</div>';
                            }
                        }
                        ?>

                        <div id="validation-errors" class="errors alert-offset"></div>

                        <div class="inputs">
                            <div class="name-input">
                                <input id="name-input" class="inputbox-mod" type="text" placeholder="Name" name="name">
                            </div>

                            <div class="email-input">
                                <input id="email1-input" class="inputbox-mod" type="email" placeholder="Primary Email" name="fromemail">
                            </div>
                        
                            <div class="email-confirm-input">
                                <input id="email2-input" class="inputbox-mod" type="email" placeholder="Confirm Primary Email" name="confirmfromemail">
                            </div>

                            <div class="antispam antispam-input">
                                <input class="inputbox-mod" type="text" placeholder="Leave this field blank!" name="spam">
                            </div>
                        </div>

                        <div class="comments comment-input">
                            <textarea class="textarea-mod" name="usercomments" placeholder="Message" maxlength="5000"><?php echo $textareaMsg; ?></textarea>
                        </div>

                        <div class="recaptcha-contact-wrap">
                            <div id="recaptcha-contact"></div>
                        </div>

                        <div class="buttons button-input">
                            <button class="submit-button" type="button" id="send-contact-form">Send</button>
                            <button class="submit-button reset-button" type="reset" id="reset-contact-form">Reset</button>                                  
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
