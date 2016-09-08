<?php
error_reporting(0);
session_start();

// Declair Veriables

$sender 		= $_POST['email'];
$subject		= "ABEL Driving School | Contact Qurey";
$sendername		= $_POST['name'];
$receiver 		= "kashif.ranglerz@gmail.com";
$message		= $_POST['message'];

// Prepare Email Body Text

$EmailBody	= "<table cellpadding='0' cellspacing='0' width='800'>";
$EmailBody	= $EmailBody . "<tr height='100'>";
$EmailBody	= $EmailBody . "<td bgcolor='#FAB005' align='center'>";
$EmailBody	= $EmailBody . "<h3 style='color:#FFF; font-family:Verdana;'>Welcome to ABEL Driving School</h3>";
$EmailBody	= $EmailBody . "</td>";
$EmailBody	= $EmailBody . "</tr>";
$EmailBody	= $EmailBody . "<tr>";
$EmailBody	= $EmailBody . "<td bgcolor='#FAFAFA' style='padding:15px;'>";
$EmailBody	= $EmailBody . "<h4 style='font-family:Verdana; font-size:13px;'>Dear Admin</h4>";
$EmailBody	= $EmailBody . "<p style='font-family:Verdana; font-size:12px;'>Please assist the following query ASAP.</p>";
$EmailBody	= $EmailBody . "<br />";
$EmailBody	= $EmailBody . "<h4 style='font-family:Verdana; font-size:13px;'><u>Query Details:</u></h4>";
$EmailBody	= $EmailBody . "<p style='font-family:Verdana; font-size:12px;'><strong>Name: </strong>".$sendername."</p>";
$EmailBody	= $EmailBody . "<p style='font-family:Verdana; font-size:12px;'><strong>Email: </strong><a href='mailto:".$sender."' target='_blank'>".$sender."</a></p>";
$EmailBody	= $EmailBody . "<p style='font-family:Verdana; font-size:12px;'><strong>Message: </strong><br />".$message."</p>";
$EmailBody	= $EmailBody . "</td>";
$EmailBody	= $EmailBody . "</tr>";
$EmailBody	= $EmailBody . "<tr height='50'>";
$EmailBody	= $EmailBody . "<td bgcolor='#414143' align='center'>";
$EmailBody	= $EmailBody . "<h2 style='color:#FFF; font-size:12px; font-family:Verdana; font-weight:normal;'>&copy; 2016 | <a href='http://abel.ranglerz.com/' style='color:#FFF; font-size:12px; font-family:Verdana; font-weight:normal;' target='_blank'>ABEL Driving School</a> - All Rights Reserved.</h2>";
$EmailBody	= $EmailBody . "</td>";
$EmailBody	= $EmailBody . "</tr>";
$EmailBody	= $EmailBody . "</table>";

// Send Email 

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From:" . $sendername . "\r\n" .
"Reply-To:" . $sender . "\r\n" .
"X-Mailer: PHP/" . phpversion();

mail($receiver, $subject, $EmailBody, $headers);

if ($headers) {
		$url			= parse_url($_SERVER['HTTP_REFERER']);
		$trimmedHeader	= $url['scheme'] . '://' . $url['host'] . $url['path'];
		header("location:".$trimmedHeader."?REQUEST=SENT");
	} else {
		$url			= parse_url($_SERVER['HTTP_REFERER']);
		$trimmedHeader	= $url['scheme'] . '://' . $url['host'] . $url['path'];
		header("location:".$trimmedHeader."?SENDING=FAILED");
	}
?>
