<?php
// Importennt - Insert your Email here!
$email = "youremail@yourdomain.com";

$mailFrom = $_POST['emailFrom'];
$subject = $_POST['subject'];
$message = $_POST['message'];
			
mail($email, $subject, $message, "From: ".$mailFrom);
?>