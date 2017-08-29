<?php
$errors = '';
$myemail = 'hola@snappybots.com'; // Put Your email address here.

$name = $_POST['name'];
$email_address = $_POST['email'];
// $plan = $_POST['plan'];
$plan = $_POST['plan-2'];


if( empty($errors) )
{
	$to = $myemail;
	$email_subject = "Quiero el plan ".$plan;
	$email_body = "Hola soy ".$name.", Mi mail es ".$email_address." y quiero el Plan ".$plan." para mi E-Commerse.";

	$headers = "From: Snnapy Web <$myemail>"; // $myemail
	$headers .= " Reply-To: $myemail";
	$headers .= " Bcc: $myemail";

	if(mail($to,$email_subject,$email_body,$headers)){
		header('Location: enviado.php');
	}
	// Redirect to the 'thank you' page after sending message
}
?>
