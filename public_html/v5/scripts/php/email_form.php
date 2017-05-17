<?php
session_start();

// Put form data in session variables.
$_SESSION["name"] = $_POST['name'];
$_SESSION["fromemail"] = $_POST['fromemail'];
$_SESSION["confirmfromemail"] = $_POST['confirmfromemail'];
$_SESSION["usercomments"] = $_POST['usercomments'];
$message = "";

// Verifies the correct format for each field.  If a field is incorrect, a value
// of "1" is concatenated to the return message; otherwise "0" is concatenated.
//
// The return message will be a 3 digit code following the format:
//  [0|1]  [0|1]          [0|1]
//  [name] [email format] [emails match]

if (!preg_match("/\S+/", $_SESSION["name"])) {
    $message .= "1"; //Name required.
}
else {
    $message .= "0"; //Name format OK
}

if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/", $_SESSION["fromemail"])) {
    $message .= "1"; //Email Address format is incorrect.
}
else {
    $message .= "0"; //Email format OK
}

if (strcmp($_SESSION["fromemail"], $_SESSION["confirmfromemail"]) != 0 || empty($_SESSION["fromemail"]) && empty($_SESSION["confirmfromemail"])) {
    $message .= "1"; //Email Addresses don't match. Excludes them both being blank.
}
else {
    $message .= "0"; //Email match OK
}

if (strcmp($message, "000") != 0) {
    header("Location: ../../index.php?message=$message#contact");
    exit;
}

if(isset($_POST["spam"]) && $_POST["spam"] == '') {
    // Constuct and send email from form information if the spam field is blank.
    $myemail = "cm.02.93@gmail.com";

    $msg = "Name: " . $_SESSION["name"] . "\n";
    $msg .= "Email: " . $_SESSION["fromemail"] . "\n";
    $msg .= "Comments:\n" . $_SESSION["usercomments"];

    $subject = "An Email from " . $_SESSION["name"] . ", via chrismeyers.info [SITEGROUND]";
    $headers = "From: " . $myemail;

    if($_POST["fromemail" && !preg_match("/[\r\n]/", $_POST["fromemail"])]) {
        $headers = "From: " . $_SESSION["fromemail"];
    }

    mail($myemail, $subject, $msg, $headers);
}

// Cleanup session variables.
session_unset();

header("Location: ../../index.php?message=$message#contact");
