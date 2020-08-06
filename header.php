<header>
	<img src="media/header.png" id="headerimg">
	<h1 id="logo">Mandy's Book Club</h1>
	<div id="menu">
		<ul id="mainMenu"> 	<!-- https://www.w3schools.com/css/css_navbar.asp -->
			<li class="menuitems"><a href="index.php" class="<?php echo ($current_page =='index.php')?'active': NULL?>">Home</a></li>
			<li class="menuitems"><a href="about.php" class="<?php echo ($current_page =='about.php')?'active': NULL?>">About Us</a></li>
			<li class="menuitems"><a href="browse.php" class="<?php echo ($current_page =='browse.php')?'active': NULL?>">Browse</a></li>
			<li class="menuitems"><a href="mybooks.php" class="<?php echo ($current_page =='mybooks.php')?'active': NULL?>">My Books</a></li>
			<li class="menuitems"><a href="contact.php" class="<?php echo ($current_page =='contact.php')?'active': NULL?>">Contact</a></li>
			<li class="menuitems"><a href="gallery.php" class="<?php echo ($current_page =='gallery.php')?'active': NULL?>">Gallery</a></li>
		</ul>
	</div>
</header>