<?php

switch (@$_GET['do'])
 {

 case "send":

      $name = $_POST['name'];
      $fromemail = $_POST['fromemail'];
      $usercomments = $_POST['usercomments'];
      $secretinfo = $_POST['info'];
      $message = "";
      
    if (!preg_match("/\S+/",$name))
    {
      unset($_GET['do']);
      $message = "Name required. Please try again.";
      //header("Location: contact.php");
      echo $message;
      break;
    }
    if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$fromemail))
    {
      unset($_GET['do']);
      $message = "Email Address format is incorrect. Please try again.";
      //header("Location: contact.html");
      echo $message;     
      break;
    }
    if ($secretinfo == "")
    {
       $myemail = "cm.02.93@gmail.com";
       $emess = "Name: ".$name."\n";
       $emess.= "Email: ".$fromemail."\n";
       $emess.= "Comments: ".$usercomments;
       $ehead = "From: ".$fromemail."\r\n";
       $subj = "An Email from ".$name.", via chrismeyers.info";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = "Email was sent.";
    }
 
       unset($_GET['do']);
       header("Location: thank_you.html");
     break;
 
 default: break;
 }
?>