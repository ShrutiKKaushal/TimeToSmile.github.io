<?php

require 'includes/PHPMailer.php';
require 'includes/Exception.php';
require 'includes/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail ->isSMTP();
$mail ->Host = "smtp.gmail.com";
$mail ->SMTPAuth = "true";
$mail ->SMTPSecure = "tls";
$mail ->Port = "587";
$mail ->Username = "testmailatmx@gmail.com";
$mail ->Password = "mailtest!@#";

$mail ->Subject = "Test Subject";
$mail ->setFrom("testmailatmx@gmail.com");
$mail ->Body = "This is Test Body";
$mail ->addAddress("madhukaushal31@gmail.com")

if ($mail ->send()){
	echo "Email sent";
}else{
	echo "Error.."


}
$mail ->smtpClose();