<?php

$errors = '';
$myemail = 'uwvsa@clubs.feds.ca';//<-----Put Your email address here.

if(empty($_POST['name'])  || 
   empty($_POST['email']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "[Mailing list request]: $email_address";
$email_body = "The following person made a request to join the mailing list:\n\n".
"Name: $name\n".
"Email: $email_address\n\n".
"This is an automated message. Do not reply to this email.";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: thankyou.php');
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Error</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>