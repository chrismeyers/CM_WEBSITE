<?php

$name = $_POST['name'];
$fromemail = $_POST['fromemail'];
$confirmfromemail = $_POST['confirmfromemail'];
$usercomments = $_POST['usercomments'];
$message = "";

if (!preg_match("/\S+/", $name)) {
    $message = "000"; //Name required. Please try again.
    header("Location: index.php?message=$message&name=$name&email=$fromemail&comment=$usercomments#contact-me");
    die();
} 
if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/", $fromemail)) {
    $message = "001"; //Email Address format is incorrect. Please try again.
    header("Location: index.php?message=$message&name=$name&email=$fromemail&comment=$usercomments#contact-me");
    die();
}
if (strcmp($fromemail,$confirmfromemail) != 0){
    $message = "011"; //Email Addresses don't match. Please try again.
    header("Location: index.php?message=$message&name=$name&email=$fromemail&comment=$usercomments#contact-me");
    die();
}

$myemail = "cm.02.93@gmail.com";
$emess = "Name: " . $name . "\n";
$emess.= "Email: " . $fromemail . "\n";
$emess.= "Comments: " . $usercomments;
$ehead = "From: " . $fromemail . "\r\n";
$subj = "An Email from " . $name . ", via chrismeyers.info";
mail("$myemail", "$subj", "$emess", "$ehead");

header("Location: thank_you.php");
