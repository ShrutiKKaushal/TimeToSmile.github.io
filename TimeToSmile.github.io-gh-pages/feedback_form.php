<?php
$name =  $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$province = $_POST['province'];
$message = $_POST['message'];


mail($mail, $name, "Thanks");

?>