<div class="spacer"></div>
<div id='footer' class='footer-size'>
    <div class='footer-links'>
        <div class='footer-social'>
            <a href='https://www.facebook.com/meyers42'
               target='_blank'
               style='text-decoration: none;'
               alt='Facebook' 
               title='Facebook'>
                <?php echo file_get_contents("images/v5/social/facebook-logo.svg"); ?>
            </a> 
        </div>

        <div class='footer-bullets'>&bull;</div>

        <div class='footer-social'>
            <a href='https://www.linkedin.com/in/chris-meyers'
               target='_blank' 
               style='text-decoration: none;'
               alt='LinkedIn' 
               title='LinkedIn'>
                <?php echo file_get_contents("images/v5/social/linkedin-logo.svg"); ?>
            </a> 
        </div>

        <div class='footer-bullets'>&bull;</div>

        <div class='footer-social'>
            <a href='https://github.com/chrismeyers' 
               target='_blank'
               style='text-decoration: none;'
               alt='GitHub'
               title='GitHub'>
                <?php echo file_get_contents("images/v5/social/mark-github.svg"); ?>
            </a> 
        </div>

        <div class='footer-bullets'>&bull;</div>

        <div class='footer-resume'>
            <a href="?message=resume#contact" class="fancytxt">
                Request Résumé
            </a>
        </div>
    </div>
    
    <?php echo "<span class='footer-years'>Designed and Developed by Chris Meyers, 2013-" . date("Y") ."</span>" ?>       
</div>
