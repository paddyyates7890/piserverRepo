<?php
// this is for the users logging in
include_once("backend/database.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI SERVER</title>
    <link rel="stylesheet" href="/style/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/login.css">
</head>
<body>
    <h1>Welcome to the pi server</h1>
    <div class="flex-container">
        <div class="login-form">
            <form method="post" action="/backend/database.php">
                    <label for="uname">Username:</label></br>
    				<input type="text" id=unameBox name="uname" placeholder="Username"></br>
                    <label for="psswrd">Password:</label></br>
                    <input type="text" id="psswrdBox" name="psswrd" placeholder="Password"></br>
    				<input type="submit" value="Submit" name="logInSubmit">
            </form>
        </div>
    </div>
</body>
</html>
