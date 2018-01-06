<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail("20kgeek@ctrektechhub.com","Contact On: $subject","From: $name", "Email: $email","Phone Number: $phone\r\n");

echo "Thanks For Contacting Us";

 ?>
