<div id="contact-me" class="content">
            <div class="section-header">Contact</div>

            <div class="content-text">
                <div id='errors'></div>
                <form action="scripts/php/email_form.php" method="post" target="_top">
                    <div class="message">
                        Find me on <a class="fancytxt" href="https://www.facebook.com/meyers42" target="_blank">Facebook</a>,<br />
                        see my professional profile on <a class="fancytxt" href="https://www.linkedin.com/in/chris-meyers" target="_blank">LinkedIn</a>,<br/>
                        and visit <a class="fancytxt" href="https://github.com/chrismeyers" target="_blank">GitHub</a> to view my code.
                    </div>

                    <p class="message"><b>Questions? Comments? Concerns? Send me a message!</b></p>

                    <?php
                    if (!empty($_GET['message'])) {
                        $message = $_GET['message'];
                        
                        if ($message == "resume") {
                            $_SESSION["usercomments"] = "I would like a copy of your résumé.";
                            echo '<p class="errors">';
                            echo "To request a PDF version of my résumé, please enter your name, email and any additional information.";
                            echo '</p>';
                        }
                        else if(strcmp($message, "000") != 0) {
                            $err_arr = str_split($message);
                            
                            echo '<p class="errors">';
                            if ($err_arr[0] == "1") {
                                echo "<span class='contact-symbol'><img src='images/icons/alert.svg'> Name required. Please try again.</span>" . '<br />';
                            } 
                            if ($err_arr[1] == "1") {
                                echo "<span class='contact-symbol'><img src='images/icons/alert.svg'> Email Address format is incorrect. Please try again.</span>" . '<br />';
                            }
                            if ($err_arr[2] == "1") {
                                echo "<span class='contact-symbol'><img src='images/icons/alert.svg'> Email Addresses don't match. Please try again.</span>" . '<br />';
                            }

                            echo '</p>';
                        }
                        else {
                            echo '<p class="success">';
                            echo "<span class='contact-symbol'><img src='images/icons/check.svg'> Your request has been successfully submitted. Thank you!</span>";
                            echo '</p>';
                        }
                    }
                    ?><p></p>

                    <table class="inputs">
                        <tr>
                            <td class="name-input">
                                <input class="input-mod inputbox-mod" type="text" placeholder="Name" name="name"<?php
                                if (isset($_SESSION["name"])) {
                                    echo 'value="' . $_SESSION["name"] . '">';
                                } else {
                                    echo '>';
                                }
                                ?></td>
                        </tr>
                        <tr>
                            <td class="email-input">
                                <input class="input-mod inputbox-mod" type="email" placeholder="Primary Email" name="fromemail"<?php
                                if (isset($_SESSION["fromemail"])) {
                                    echo 'value="' . $_SESSION["fromemail"] . '">';
                                } else {
                                    echo '>';
                                }
                                ?></td>

                            <td class="email-input">
                                <input class="input-mod inputbox-mod" type="email" placeholder="Confirm Primary Email" name="confirmfromemail">
                            </td> 
                        </tr>
                    </table>

                    <p></p>
                    <table class="comments">
                        <tr>
                            <td>
                                <textarea class="textarea-mod" name="usercomments" placeholder="Message" maxlength="5000"><?php
                                    if (isset($_SESSION["usercomments"])) {
                                        echo $_SESSION["usercomments"] . '</textarea>';
                                    } else {
                                        echo '</textarea>';
                                    }
                                    ?></td>
                        </tr>
                        
                    </table>
                    
                    <p></p>
                    <table class="buttons">
                        <tr>
                            <td>
                                <button class="submit-button" type="submit">Send</button>
                                <button class="submit-button" type="reset" onclick="deleteCookie('PHPSESSID'); window.location='index.php#contact';">Reset</button>
                            </td>
                        </tr>                                        
                    </table>
                </form>    
            </div>
        </div>
