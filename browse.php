<?php 

include 'config.php';

//Open the database
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

//Check if can connect
if($db->connect_error){
  echo "Connection error: " . $db->connect_error;
  exit();
}

//isset means if this has been activated
//&_POST is a global variable, to see if the Search btn has been clicked


$searchtitle = "";
$searchauthor = "";

if(isset($_GET['bookid'])) {
	$bookid = $_GET['bookid'];
	$query = "UPDATE Books
				SET reserve=1
				WHERE book_id = $bookid";
	$statement = $db->prepare($query);
	$statement->execute();
}

if(isset($_POST) && !empty($_POST)){
	
	$searchtitle = trim($_POST['title']);
	$searchauthor = trim($_POST['author']);
}


$query = "SELECT Books.book_id, Books.book_title, Books.ISBN, Authors.first_name, Authors.last_name FROM Books
JOIN book_author ON Books.book_id = book_author.book_id
JOIN Authors ON Authors.author_id = book_author.author_id";

if ($searchtitle && !$searchauthor){
	
	$query = $query . " WHERE Books.book_title LIKE '%" . $searchtitle . "%'";
}

if (!$searchtitle && $searchauthor){
	
	$query = $query . " WHERE Authors.first_name LIKE '%" . $searchauthor . "%'";
}

if ($searchtitle && $searchauthor){
	
	$query = $query . " WHERE Books.book_title LIKE '%" . $searchtitle . "%' AND Authors.first_name LIKE '%" . $searchauthor . "%'";
}
	
echo $query;


$statement = $db->prepare($query);
$statement -> bind_result($bookid, $title, $isbn, $author_first, $author_last);
$statement->execute();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Browse - Mandy's Book Club</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
</head>
<body>

	<?php include 'header.php';?>

	<div id="browseopen">
		<h2>Browse Books</h2>
		<p>Looking for a brand new read? Or maybe you're more interested in the classics? Whatever you book preference, find it here! With thousands and thousands of books available in our library, you are guaranteed to find something you love! <b>Can't find what you're looking for? Reach out to us <a href="contact.php" class="welcomelink">here!</a></b></p>
	</div>

	<div id="search">
		<h3>Browse:</h3>
		<form action="" method="post">
			<p class="caption">Search by Author:</p>
			<input type="text" id= "author" name="author" placeholder="Enter Author's Name">
			<p class="caption">Search by Title:</p>
			<input type="text" id= "title" name="title"  placeholder="Enter Book Title">
			<br>
			<input type="submit" name="Search">
		</form>	
		<?php
	
		echo '<table cellpadding="7">';
		echo '<tr>
				<td><b>ID</b></td>
				<td><b>Title</b></td>
				<td><b>Author</b></td>
				<td><b>ISBN</b></td>
				<td><b>Reserved</b></td>
			</tr>';
		while($statement->fetch()) {
				echo "<tr>";
				echo "<td> $bookid </td><td> $title </td><td> $author_first $author_last </td><td> $isbn </td>";
				echo "<td>
					<form method='get' action=''>
					<button name='bookid' value='".$bookid."' type='submit' onclick='reserveSuccess();'>Reserve</button>
					</form></td>";
				echo "</tr>";
		}

		echo '</table>'; 

		?>
		
	<script type="text/javascript"> // reference: https://stackoverflow.com/questions/49106965/how-to-echo-a-href-links-with-onclick-alert-php
		function reserveSuccess(){ 
			alert("You have successfully reserved this book!"); 
		}
	</script>
		
	</div>
	
	<?php include 'footer.php';?>

	</body>

</html>