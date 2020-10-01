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
	
	
}
?>