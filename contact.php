<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact Form'; 
		$to = 'emample@email.com'; 
		$subject = $_POST['subject'];
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	

	mail($to, $subject, $body, $from) or die("Error!");

	header("location: thank-you.html");
	
	}
	
?>