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
	
	$msg .= "$feedback\n";
	$msg .= "\n--------\n\n";
	$msg .= "Bundle ID: $bundleID\n";
	$msg .= "System Profile: $systemProfile\n";
	
	mail("YOUR_FEEDBACK_EMAIL_ADDRESS_HERE@gmail.com", "[$feedbackType] $appName", $msg);
}
?>

</body>
</html>
