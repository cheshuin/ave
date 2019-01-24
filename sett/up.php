<?php require_once ("sett.php");

$text=$_POST["text"];
$id=$_POST["id"];
if($id==1) {
	
	$text=mysql_real_escape_string( $text );
	
	$sql= " UPDATE code SET code='$text' WHERE id=1";

mysql_query($sql) or die (mysql_error());			
			
	

header("Location: edit.php?id=$id");


	
	
	}

if($_POST["id"]==2) {
	
	$text=mysql_real_escape_string( $text );
	
	$sql= " UPDATE code SET code_eng='$text' WHERE id=1";

mysql_query($sql) or die (mysql_error());			
			
	

header("Location: edit.php?id=$id");
	
	
	}








?>