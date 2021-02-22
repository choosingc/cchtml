<?php
	
/*
	start of phpmailer v:
require '../libraries/php_mailer/src/PHPMailer.php';
require '../libraries/php_mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
*/

	
ob_start();
	
$subject = $_POST['name'].' [via JD.com]';
$message_with_rest_of_form = "Company/organization:\n".$_POST['org']."\n\nEmail address:\n".'<a href="mailto:'.$_POST['email'].'">'.$_POST['email']."</a>\n\nMessage:\n\n".$_POST['message'];


// should be jim.detert.choosingcourage@gmail.com
mail('tomashoxford@gmail.com',$subject,$message_with_rest_of_form);

// header("Location: http://example.com/myOtherPage.php");

?>

<p>Thank you for your message.</p>

<p>
	<a href="http://jimdetert.com/">
		To continue browsing my website, click here.
	</a>
</p>

<?
exit();
// die or exit, because http://thedailywtf.com/Articles/WellIntentioned-Destruction.aspx