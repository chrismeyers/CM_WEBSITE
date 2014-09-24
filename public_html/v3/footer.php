<?php

    echo "<div id='footer'>
            <a href='https://www.facebook.com/meyers42'
               target='_blank'
               style='text-decoration: none;'>
                <img src='images/facebook.png'
                     onmouseover=\"this.src = 'images/facebook_hover.png'\" 
                     onmouseout=\"this.src = 'images/facebook.png'\"
                     style='width: 16px; height: 16px;'
                     alt='Facebook'
                     title='Facebook'>
            </a>
            &bull;
            <a href='http://www.linkedin.com/pub/chris-meyers/61/7a9/b09'
               target='_blank' 
               style='text-decoration: none;'>
                <img src='images/linkedin.png'
                     onmouseover=\"this.src = 'images/linkedin_hover.png'\" 
                     onmouseout=\"this.src = 'images/linkedin.png'\"
                     style='width: 16px; height: 16px;'
                     alt='LinkedIn' 
                     title='LinkedIn'>
            </a>
            &bull;
            <a href='https://github.com/chrismeyers' 
               target='_blank'
               style='text-decoration: none;'>
                <img src='images/github.png'
                     onmouseover=\"this.src = 'images/github_hover.png'\" 
                     onmouseout=\"this.src = 'images/github.png'\"
                     style='width: 16px; height: 16px;'
                     alt='GitHub'
                     title='GitHub'>
            </a>
            &bull;
            <a href='downloads/Resume_ChrisMeyers.pdf' download='Resume_ChrisMeyers' class='fancytxt'>
                Download Résumé
            </a>
            <p>Designed and Developed by Chris Meyers, 2013-" . date("Y") ."</p>
        </div>";
?>