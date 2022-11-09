<?php
// all of the main database functons 
// i might change to all of the html being in the database soon

function userLogIn() {
	$servername = "localhost";
	$username = "patrick";
	$password = "dbkey";
	$dbname = "pidatabase";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (mysqli_connect_errno()){
			echo "Failed to connect to database:" . mysqli_connect_error();
	}

	$sqlQuery = "SELECT *  FROM users";
		
	$result = mysqli_query($conn, $sqlQuery);
	echo mysqli_error($conn);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	// figure out how to get more than one row from the db //
	foreach ($row as $data) {
		echo $data;
	}

	mysqli_free_result($result);
	mysqli_close($conn);
}

if (isset($_POST["logInSubmit"])){
	userLogIn();
}
?>
