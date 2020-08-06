<?php
include ('config.php');

//Open the database
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

//Check if can connect
if($db->connect_error){
  echo "Connection error: " . $db->connect_error;
  exit();
}
	
	if(isset($_POST) && !empty($_POST)){
			
		$loginuser = mysqli_real_escape_string($db, $_POST['username']);
		$loginpass = mysqli_real_escape_string($db, $_POST['password']);
		// ' OR'1'='1'   - myusername = loginuser   - mypassword = loginpass

		$query="SELECT Users.username, Users.password FROM Users
		WHERE username ='".$loginuser."' ";
		$statement = $db->prepare ($query);
		//the following statement replaces the "?" inside the sql prepared statement
		 //this says it's a string, and the value is whatever inside the $loginuser
		$statement->bind_result($dbuser, $dbpass);
		$statement->execute();

		//check if the password is the same with a "while" statement, so we ask the DB ifthere is a username with that name to search for the password, otherwise don't check
		while($statement->fetch()){
			if($loginpass == $dbpass){
				header('location:fileupload.php');
			} echo "Wrong password!";

		}
		//use MD5  only if the password inside the DB is already hashed, if it's just text you don't need it
	}

?>

<!DOCTYPE html>

<html>
	<head>
		<title>About Us - Mandy's Book Club</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
	</head>
	<body>

		<?php include 'header.php';?>
		
		<h2 id="loginintro">User Login</h2>

		<div id="clublogin">
			<form id="loginform" action="#" method="POST">
			  <label for="username"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>

			  <label for="password"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<br>
			  <button type="submit" name="submit" value="login">Login</button>
			</form>
		</div>

		<?php include 'footer.php';?>

	</body>
</html>
