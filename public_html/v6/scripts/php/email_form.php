<?php

$name= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$fromemail = filter_var($_POST["fromemail"], FILTER_SANITIZE_EMAIL);
$usercomments = filter_var($_POST["usercomments"], FILTER_SANITIZE_STRING);

if(isset($_POST["spam"]) && $_POST["spam"] == "") {
    // Constuct and send email from form information if the spam field is blank.
    $to = "cm.02.93@gmail.com";

    $msg = "Name: " . $name . "\n";
    $msg .= "Email: " . $fromemail . "\n";
    $msg .= "Comments:\n" . $usercomments;

    $subject = "An Email from " . $name . ", via chrismeyers.info [SITEGROUND]";
    
    $headers = "From: " . $to;
    if($fromemail && !preg_match("/[\r\n]/", $fromemail)) {
        $headers = "From: " . $fromemail;
    }

    mail($to, $subject, $msg, $headers);
}

header("Location: ../../index.php?message=success#contact");
