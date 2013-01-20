<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = $name.' <'.$email.'>';

$header = 'From: '.$from;

mail('myemail@example.com', 'contact form request', $header);

header('Location: thankyou.php');
