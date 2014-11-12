<!DOCTYPE html>

<html>
    <head>
        <title>Thank you!</title>
        <link rel="shortcut icon" href="images/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="Chris Meyers" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <link rel="stylesheet" href="csselements.css">
        <link rel="stylesheet" href="csselements_small.css">

        <meta http-equiv="refresh" content="5; url=index.php" />
    </head>

    <body>
        <p id="banner">
            <a href="index.php">
                <img src="images/titlepic.png" 
                     onmouseover="this.src = 'images/titlepic_hover.png'"
                     onmouseout="this.src = 'images/titlepic.png'" alt="banner">
            </a>
        </p>


        <div id="main">
            <span style="font-size: medium;">Your request has been successfully submitted. Thank you!</span>
            <p style="font-size: medium;"><b>Redirecting to Homepage in 5 seconds . . . </b></p>

        </div>

        <?php include 'footer.php' ?>

    </body>
</html>
