<?php

$name = $_POST['name'];
$fromemail = $_POST['fromemail'];
$usercomments = $_POST['usercomments'];
//$secretinfo = $_POST['info'];
$message = "";

if (!preg_match("/\S+/", $name)) {
    $message = "000"; //Name required. Please try again.
    header("Location: index.php?m=$message&n=$name&e=$fromemail&c=$usercomments#contact-me");
    die();
} 
if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/", $fromemail)) {
    $message = "001"; //Email Address format is incorrect. Please try again.
    header("Location: index.php?m=$message&n=$name&e=$fromemail&c=$usercomments#contact-me");
    die();
}

$myemail = "cm.02.93@gmail.com";
$emess = "Name: " . $name . "\n";
$emess.= "Email: " . $fromemail . "\n";
$emess.= "Comments: " . $usercomments;
$ehead = "From: " . $fromemail . "\r\n";
$subj = "An Email from " . $name . ", via chrismeyers.info";
mail("$myemail", "$subj", "$emess", "$ehead");
//$message .= "Email was sent.";


//unset($_GET['do']);
header("Location: thank_you.php");
?>