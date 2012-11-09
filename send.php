<?php

$data = new stdClass;

$data->name		= $_POST['name'];
$data->lastname	= $_POST['lastname'];
$data->email	= $_POST['email'];
$data->phone	= $_POST['phone'];
$data->city		= $_POST['city'];
$data->country	= $_POST['country'];
$data->how	= $_POST['how'];
$data->message	= $_POST['message'];

$header = 'From: ' . $data->email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "This message was created at the contact us website form: \r\n";
$message .= "name: " . $data->name . " \r\n";
$message .= "last name: " . $data->lastname . " \r\n";
$message .= "phone: " . $data->phone . " \r\n";
$message .= "city: " . $data->city . " \r\n";
$message .= "country: " . $data->country . " \r\n";
$message .= "How did you hear about us?: " . $data->how . " \r\n";
$message .= "message: " . $data->message . " \r\n";


//$to = 'mcaceres@bridgerconway.com';
$to = 'jsignup@verderesidences.com';

$subject = 'Contact from Verde Web Teaser';

$response = new stdClass;
$response->ok = mail($to, $subject, stripslashes(utf8_decode($message)), $header);

echo json_encode($response); 

?> 