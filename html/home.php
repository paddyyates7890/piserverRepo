<?php
	// this is the main home screen for the web server //
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>THE PI SERVER</title>
	<link rel="stylesheet" href="/style/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<header>

	</header>

	<nav>
		<ul class="navigation-bar" >
			<li><a href="home.php">Home</a></li>
			<li><a href="/pages/future.php">Future</a></li>
		</ul>
	</nav>	

	<main>
		<h1>The PI SERVER Home page</h1>
		<h5>Welcome to the number 7 Yarn Croft Web Server</h5>

		<div class="nav-explination">
			<h3>page explainations</h3>
			<a href="home.php" class="home-list" >HOME</a>
			<p>The home page is the page your on right now on this page there will be an explination for every page on this site and some other infomation i don't really know yet what i will put on here </p>
			<a href="/pages/future.php" class="home-list" >FUTURE</a>
			<p>This page explains what the futures ideas are going to be for new pages on this site</p>
		</div>
		
		<div class="suggestions" >
			<h3>suggestions</h3>

			<p>Please enter any suggestions that you may have for this site here</p>			

			<form action="backend/suggestions.php" method="post" >
				<label for="suggestions">Suggestion:</label></br>
				<input type="text" id=suggestion-box name="suggestions" placeholder="Enter suggestion here">
				<input type="submit" value="Submit">
			</form>
		</div>

	</main>

	<footer>
		<h4> This is patrick's web site get off </h4>
	</footer>

</body>
</html>

