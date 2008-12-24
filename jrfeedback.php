<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>JRFeedback</title>
</head>
<body>

<p>This page not intended for humans. Thanks for playing, though.</p>

<?php 	
if (array_key_exists('feedback', $_REQUEST)) {
	$feedbackType = $_REQUEST['feedbackType'];
	$appName = $_REQUEST['appName'];
	
	$email = $_REQUEST['email'];
	$feedback = $_REQUEST['feedback'];
	$bundleID = $_REQUEST['bundleID'];
	$systemProfile = $_REQUEST['systemProfile'];
	
	$msg .= "\r\n\r\n";
	$msg .= "Bundle ID: $bundleID\r\n";
	$msg .= "Email: $email\r\n";
	$msg .= "Feedback: $feedback\r\n";
	$msg .= "\r\n\r\n--------\r\n\r\n";
	$msg .= "System Profile: $systemProfile\r\n";
	
	mail("YOUR_FEEDBACK_EMAIL_ADDRESS_HERE@gmail.com", "[$feedbackType] $appName", $msg);
}
?>

</body>
</html>
