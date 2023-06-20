<html lang="en">
    <head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>m. currier designs - Thanks</title>
<?php include 'includes/header.php'; ?>

	
	<?php
$person = new stdClass;
$person->name = $_POST['name'];
$person->email = $_POST['email'];

$person->phone = $_POST['phone'];
$person->comment = $_POST['comment'];
$person->headers = 'From:info@mcurrier.com' . "\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n";

mail('mushel@gmail.com', "New message from $person->name" , "$person->email and $person->name number is $person->phone. This is what they had to say in the comments: $person->comment" , "$person->headers" );



?>
	<div class="row">
		<div class="twelve columns">
			<h4 class="green">Your message was sent!</h4>
			<p>
<?
echo "Thanks $person->name, your email was sent to m. currier designs. from $person->email.";

?></p>
		</div>
	</div>

<?php 
include 'includes/footer.php';
?>
