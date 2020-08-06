<!DOCTYPE html>
<?php include("config.php") ?>
<html>
<head>
	<title>Contact - Mandy's Book Club</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
</head>
<body>

	<?php include 'header.php';
	$email;
	$email = htmlentities($email);
	//this protects the html entries not to tranform and only show it as plain text
	?>

	<div id="contactintro">
		<h2>Contact Us</h2>
		<p>Couldn't find your favourite book in our <a href="browse.php" class="welcomelink">Browse</a> library? Interested in joining our team? Not sure how something works? Or just want to reach out to us? Contact us here, now! Keep an eye on your email, we will respond as soon as we can! Or, you can reach out to us on social media.</p>
	</div>

	<form id="contact">
		Full Name:
		<br>
		<input type="text" name="fullname">
		<br>
		Email:
		<br>
		<input type="email" name="email">
		<br>
		Subject:
		<br>
		<input type="text" name="subject">
		<br>
		Message:
		<br>
		<textarea rows="10" cols="70"></textarea>
		<br>
		<input type="submit" name="send" value="Send Message">
	</form>

	<?php include 'footer.php';?>
	
</body>

</html>