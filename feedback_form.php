<?php

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$company = $_REQUEST['address'];
	$province = $_REQUEST['Province'];
	$message = $_REQUEST['message'];

	//check fields
	if (empty($name) || empty($email) || empty($company) || empty($province) || empty($message))
	{
		echo "Please fill all the details";
	}
	else
	{
		mail("lqtmgqruhooujrbxab@kiabws.online", "Test Email", $message, "From: $name < $email>");
		echo "<script type='text/javascript'>alert('sucessful sent');
		windows.history.log(-1);
		</script>"

	}
	
	print<"hr/>";
	print "Name:$name<br />";
	print "Email:$email<br />";
	print "company:$company<br />";
	print "Province:$province<br />";
	print "message:$message<br />";
	
	

?>