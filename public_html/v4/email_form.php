<?php

$name = $_POST['name'];
$fromemail = $_POST['fromemail'];
$confirmfromemail = $_POST['confirmfromemail'];
$usercomments = $_POST['usercomments'];
$message = "";

//Verifies the correct format for each field.  If a field is incorrect, a value
//of "1" is concatenated to the return message; otherwise "0" is concatenated.
//
//The return message follows the following format:
// [0/1][0/1][0/1]
// [name][email format][emails match]
if (!preg_match("/\S+/", $name)) {
    $message .= "1"; //Name required.
}
else {
    $message .= "0"; //Name format OK
}

if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/", $fromemail)) {
    $message .= "1"; //Email Address format is incorrect.
}
else {
    $message .= "0"; //Email format OK
}

if (strcmp($fromemail, $confirmfromemail) != 0 || empty($fromemail) && empty($confirmfromemail)) {
    $message .= "1"; //Email Addresses don't match. Excludes them both being blank.
}
else {
    $message .= "0"; //Email match OK
}

if (strcmp($message, "000") != 0) {
    header("Location: index.php?message=$message&name=$name&email=$fromemail&comment=$usercomments#contact");
    die();
}

$myemail = "cm.02.93@gmail.com";
$emess = "Name: " . $name . "\n";
$emess.= "Email: " . $fromemail . "\n";
$emess.= "Comments: " . $usercomments;
$ehead = "From: " . $fromemail . "\r\n";
$subj = "An Email from " . $name . ", via chrismeyers.info[ARVIXE]";
mail("$myemail", "$subj", "$emess", "$ehead");

header("Location: thank_you.php");
