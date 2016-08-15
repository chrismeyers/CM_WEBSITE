<?php
    session_start();
?>
<!DOCTYPE html>
<!-- HOSTED ON SITEGROUND -->
<html>
    <head>
        <title>Chris Meyers: Homepage</title>
        <link rel="shortcut icon" href="images/icons/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />
        <meta name="google-site-verification" content="hhNNTAa4qOt8sxeukKOI1u9o1w07nP3oHaT-07KvbO0" />
        <meta name="msvalidate.01" content="CF7D97B951B14774BF7EEE3D0BF09DB8" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0;" />

        <!-- build:css:dist dist/production.min.css -->
        <!-- /build -->
        <!-- build:remove:dist -->
        <link rel="stylesheet" href="css/csselements.css" />
        <link rel="stylesheet" href="css/csselements_medium.css" />
        <link rel="stylesheet" href="css/csselements_small.css" />
        <link rel="stylesheet" href="css/csselements_print.css" />
        <link rel="stylesheet" href="css/csselements_resume.css" />
        <link rel="stylesheet" href="scripts/vendor/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="scripts/vendor/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="scripts/vendor/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />

        <script type="text/javascript" src="scripts/vendor/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="scripts/vendor/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="scripts/vendor/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="scripts/vendor/fancybox/source/helpers/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="scripts/vendor/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
        <!-- /build -->
        
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

        <!-- build:js:dist dist/production.min.js -->
        <!-- /build -->
        <!-- build:remove:dist -->
        <script type="text/javascript" src="scripts/js/callbacks.js"></script>
        <script type="text/javascript" src="scripts/js/header.js"></script>
        <script type="text/javascript" src="scripts/js/prompt.js"></script>
        <script type="text/javascript" src="scripts/js/jselements.js"></script>
        <!-- /build -->
        
            
    </body>
</html>
