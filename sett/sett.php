<?php header('Content-Type: text/html; charset= utf-8');
$db= mysql_connect("localhost", "agannochka", "m82WTSKSz8");
mysql_select_db("agannochka",$db);
mysql_query("SET NAMES utf8");

$result = mysql_query("SELECT  code,code_eng FROM code" ,$db);

$myrow= mysql_fetch_array($result);

$code=$myrow["code"];
$code_eng=$myrow["code_eng"];



$login="info@avedaservice.ru";
$pass="8Nj2VBHbkS";
	
?>