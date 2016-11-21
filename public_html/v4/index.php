<?php
    session_start();
?>
<!DOCTYPE html>
<!-- HOSTED ON SITEGROUND -->
<html lang="en">
    <head>
        <title>Chris Meyers: Homepage</title>
        <link rel="shortcut icon" href="images/icons/cmlogocolor_nobackground_GREEN_small.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />
        <meta name="google-site-verification" content="hhNNTAa4qOt8sxeukKOI1u9o1w07nP3oHaT-07KvbO0" />
        <meta name="msvalidate.01" content="CF7D97B951B14774BF7EEE3D0BF09DB8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="dist/production.min.css"/>        
    </head>

    <body>
<!-- HEADER -->
        <?php include 'sections/header.php'; ?>

<!-- ABOUT SECTION -->
        <?php include 'sections/about.php'; ?>

<!-- RESUME SECTION -->
        <?php include 'sections/resume.php'; ?>

<!-- BUILDS SECTION -->
        <?php include 'sections/builds.php'; ?>
            
<!-- PROJECTS SECTION -->
        <?php include 'sections/projects.php'; ?>

<!-- CONTACT SECTION -->
        <?php include 'sections/contact.php'; ?>

<!-- FOOTER -->
        <?php include 'sections/footer.php'; ?>

<!-- PROMPT -->
        <?php include 'sections/prompt.php'; ?>

        <script src="dist/production.min.js"></script>        
            
    </body>
</html>
