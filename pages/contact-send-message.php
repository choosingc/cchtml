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
// should be jim.detert.choosingcourage@gmail.com
mail('jim.detert.choosingcourage@gmail.com',$subject,"(Company/org: ".$_POST['org'].")\n\n".$_POST['message']);

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