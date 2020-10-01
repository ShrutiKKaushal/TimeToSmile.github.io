<?php
print_r($_POST);

if (isset($_POST['submit']){
	
	$name = $_POST['your-name'];
	$email = $_POST['your-email'];
	$company = $_POST['your-address'];
	$province = $_POST['Province'];
	$message = $_POST['your-message-project'];
	
	print<"hr/>";
	print "Name:$name<br />";
	print "Email:$email<br />";
	print "company:$company<br />";
	print "Province:$province<br />";
	print "message:$message<br />";
	
	$mailTo = "shruti_01@live.com";
	$headers = "From: ".$email;
	$txt = "Test Email".$name.".\n\n".$message;
	
	mail($mailTo, $headers, $txt);
	header("Location: indexphp?mailsend");
}
?>