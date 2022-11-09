<?php
	$suggest = $_POST["suggestions"];
	$header = "From: <patrickyates07@gmail.com>";
	$result = mail("paddyyates04@gmail.com", "New Server Suggestion", $suggest, $header);
	if ($result == true){
		include_once("../pages/EmailSent.php");
	}
	else{
		include_once("../pages/EmailFailed.php");
	}
?>
