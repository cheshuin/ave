<?php require_once ("sett.php");





unset($_COOKIE["Name"]);
setcookie("Name", '', time()-3600);

unset($_COOKIE["login"]);
setcookie("login", '',time()-3600);

header("location: index.php");
	
	


	








?>