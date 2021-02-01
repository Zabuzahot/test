<?php 
	$email = $_POST['email'];
	// $name = $_POST['name'];
	// $phone = $_POST['phone'];
	// $message = $_POST['message'];

	$email = htmlspecialchars($email);
	// $name = htmlspecialchars($name);
	// $phone = htmlspecialchars($phone);
	// $message = htmlspecialchars($message);

	$email = urldecode($email);
	// $name = urldecode($name);
	// $phone = urldecode($phone);
	// $message = urldecode($message);

	$email = trim($email);
	// $name = trim($name);
	// $phone = trim($phone);
	// $message = trim($message);

if (mail("yourmail@gmail.com",  /* почта на которую идут письма*/
		"New message from wheel-spinner site",
		"email: ".$email. "\n".
		// "name: ".$name. "\n".
		// "phone: ".$phone. "\n".
		// "message: ".$message. "\n".
		"From: no-reply@mydomain.ru \r\n")
	) {
		header('location: https://clickrights.site/click.php?lp=1');
	}
	else {
		echo ('wrong');
	}
	
?>