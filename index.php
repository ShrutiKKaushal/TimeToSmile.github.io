<?php
require 'home.html'; 
?>

<?php

echo json_encode($_POST);

$name = $_POST['your-name'];
	$email = $_POST['your-email'];
	$company = $_POST['your-address'];
	$province = $_POST['Province'];
    $message = $_POST['your-message-project'];
    
    
?>

