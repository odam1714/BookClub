<?php 

	include 'config.php';

	//Open the database
	@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

	//Check if can connect
	if($db->connect_error){
	  echo "Connection error: " . $db->connect_error;
	  exit();
	}

	if(isset($_GET['bookid'])) {
		$bookid = $_GET['bookid'];
		$query = "UPDATE Books
					SET reserve=0
					WHERE book_id = $bookid";
		$statement = $db->prepare($query);
		$statement->execute();
	}

	
	$query = "SELECT Books.book_id, Books.book_title, Books.ISBN, Authors.first_name, Authors.last_name FROM Books
			JOIN book_author ON Books.book_id = book_author.book_id
			JOIN Authors ON Authors.author_id = book_author.author_id
			WHERE Books.reserve=1";
	
	echo $query;
	
	$statement = $db->prepare($query);
	$statement -> bind_result($bookid, $title, $isbn, $author_first, $author_last);
	$statement->execute();

?>


<!DOCTYPE html>
<?php include("config.php") ?>
<html>
<head>
	<title>My Books - Mandy's Book Club</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
</head>
<body>

	<?php include 'header.php';?>

	<div id="booksintro">
		<h2>My Books</h2>
		<p>Find your personal library right here at your fingertips. You can never have too many books, so add everything your heart desires. Finished reading a book? Select the button to return it. As simple as that! Running out of books to read? No worries! <b>Find your next read <a href="browse.php" class="welcomelink">here!</a></b></p>
	</div>
	
	
	<div id="library">
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
					<button name='bookid' value='".$bookid."' type='submit'>Return</button>
					</form></td>";
				echo "</tr>";
		}

		echo'</tr>';

		echo '</table>'; 

	?>
	</div>
	
	<?php include 'footer.php';?>

</body>

</html>