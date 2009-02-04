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
	
	// if they choose not to give us their email, I will use my own
	// if I left the email blank it would come from 
	// suppressed@auma.pair.com or anonymous@auma.pair.com
	// FogBugz would try to send them an email and generate another 
	// ticket telling me "Undelivered Mail Returned to Sender"
	// TODO: It'd be nice to make sure the string looks like a 
	// real email address but I'll assume everyone is playing nice.
	if ($_REQUEST['email'] == '') {
	    $email = $_REQUEST['email'];
	} else {
        $email = 'YOUR_EMAIL_ADDRESS_HERE@gmail.com';
    }
	$feedback = $_REQUEST['feedback'];
	$bundleID = $_REQUEST['bundleID'];
	$systemProfile = $_REQUEST['systemProfile'];
	
	$headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
	
	$msg .= "$feedback\n";
	$msg .= "\n--------\n\n";
	$msg .= "Bundle ID: $bundleID\n";
	$msg .= "System Profile: $systemProfile\n";
	
	mail("YOUR_FEEDBACK_EMAIL_ADDRESS_HERE@gmail.com", "[$feedbackType] $appName", $msg, $headers);
}
?>

</body>
</html>
