<?php

    echo "<div id='footer'>
            <div class='footer-links'>
                <div class='footer-social'>
                    <a href='https://www.facebook.com/meyers42'
                       target='_blank'
                       style='text-decoration: none;'>
                        <img src='images/social/facebook.png'
                             onmouseover=\"this.src = 'images/social/facebook_hover.png'\" 
                             onmouseout=\"this.src = 'images/social/facebook.png'\"
                             style='width: 16px; height: 16px;'
                             alt='Facebook'
                             title='Facebook'>
                    </a> 
                </div>

                <div class='footer-bullets'>&bull;</div>

                <div class='footer-social'>
                    <a href='http://www.linkedin.com/pub/chris-meyers/61/7a9/b09'
                       target='_blank' 
                       style='text-decoration: none;'>
                        <img src='images/social/linkedin.png'
                             onmouseover=\"this.src = 'images/social/linkedin_hover.png'\" 
                             onmouseout=\"this.src = 'images/social/linkedin.png'\"
                             style='width: 16px; height: 16px;'
                             alt='LinkedIn' 
                             title='LinkedIn'>
                    </a> 
                </div>

                <div class='footer-bullets'>&bull;</div>

                <div class='footer-social'>
                    <a href='https://github.com/chrismeyers' 
                       target='_blank'
                       style='text-decoration: none;'>
                        <img src='images/social/github.png'
                             onmouseover=\"this.src = 'images/social/github_hover.png'\" 
                             onmouseout=\"this.src = 'images/social/github.png'\"
                             style='width: 16px; height: 16px;'
                             alt='GitHub'
                             title='GitHub'>
                    </a> 
                </div>

                <div class='footer-bullets'>&bull;</div>
            
                <div class='footer-resume'>
                    <a class=\"fancytxt\" href=\"resume.php\">
                        View Résumé
                    </a>
                </div>
                
                <div class='footer-bullets'>&bull;</div>
                
                <div class='footer-resume'>
                    <a href=\"index.php?message=010&name=&email=&comment=I would like a copy of your resume.#contact-me\" class=\"fancytxt\">
                        Request Résumé
                    </a>
                </div>
            </div>
            
            <span class='footer-years'>Designed and Developed by Chris Meyers, 2013-" . date("Y") ."</span>        
        </div>";