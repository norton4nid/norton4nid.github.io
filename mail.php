<?php
if(isset( $_POST['firstName']))
$firstName = $_POST['firstName'];
if(isset( $_POST['lastName']))
$lastName = $_POST['lastName'];
if(isset( $_POST['inputEmail']))
$inputEmail = $_POST['inputEmail'];
if(isset( $_POST['phoneNumber']))
$phoneNumber = $_POST['phoneNumber'];

$content="From: $name \n Email: $inputEmail "";
$subject = "";
$recipient = "jakepasner@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Thank you very much!";
?>
