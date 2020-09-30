<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $company = $_POST['your-address'];
	$province = $_POST['Province'];
	$message = $_POST['your-message-project'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($company)) {
        $errors[] = 'Message is empty';
    }
	
	if (empty($province)) {
        $errors[] = 'Message is empty';
    }
	if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    if (empty($errors)) {
        $toEmail = 'shruti_01@live.com';
        $emailSubject = 'New email from your contact form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Company: {$company}", "Message:", $message, "Province: {$province}"];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: thank-you.html');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>