<?php require_once ("sett.php");



if($_POST["log"] !=$login or $_POST["pass"]!=$pass ) {
	
	header("location: index.php");
	
	
} else {
	
	header("location: edit.php");
	
		setcookie("login", "$pass");
	
}
	

	








?>