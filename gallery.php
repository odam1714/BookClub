<!DOCTYPE html>

<!-- <?php include("config.php");

	@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

	//Check if can connect
	if($db->connect_error){
	  echo "Connection error: " . $db->connect_error;
	  exit();
	}

?> -->

<html>
<head>
	<title>Gallery - Mandy's Book Club</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
</head>
<body>

	<?php include 'header.php';?>
	
	<h2 id="galleryintro">Images uploaded to the gallery will be displayed below!</h2>

	<div id="gallery">
		<?php 
			// https://www.youtube.com/watch?v=H6GI0IV_bEU
            $sql = "SELECT * FROM Gallery;";
            $stmt = mysqli_stmt_init($db);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="gallery-upload">
				<img src="gallery/'.$row["imgFile"].'" height="200">
				</div>';
              }
            }
		?>	
	
		
	</div>

	<?php include 'footer.php';?>
	
</body>

</html>