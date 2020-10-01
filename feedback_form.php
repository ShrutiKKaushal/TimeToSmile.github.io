<?php
if (isset($_POST['submit']){
	
	$name = $_POST['your-name'];
	$email = $_POST['your-email'];
	$company = $_POST['your-address'];
	$province = $_POST['Province'];
	$message = $_POST['your-message-project'];
	
	$mailTo = "shruti_01@live.com";
	$headers = "From: ".$email;
	$txt = "Test Email".$name.".\n\n".$message;
	
	mail($mailTo, $headers, $txt);
	header("Location: indexphp?mailsend");
}
?>