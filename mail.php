<?php 

$fname = $_POST['fname'];
$ftell = $_POST['ftell'];
$fqwest = $_POST['fqwest'];
$today = date("Y-m-d H:i:s");

if($fname == "Ваше имя" or empty($fname)) {$fname=0 ; header("Location: /");}
if($ftell == "Ваш телефон" or empty($ftell)) {$ftell =0; header("Location: /");}
if($fqwest == "Что везёте?" ) {$fqwest="не заполненно";}
	

/* получатели */
$to= "Менеджеру <info@avedaservice.ru>"  ; 


/* тема/subject */
$subject = "Заявка с сайта";

/* сообщение */
$message = '
<html>
<head>
 <title>Заявка с сайта</title>
 <h1>Заявка с сайта</h1>
	<b>Данные при заполнении формы:</b><br>

	Имя:  '.$fname.' <br> 
	Телефон:  '.$ftell.' <br>
	Что везёте:  '.$fqwest.'  <br>
    Дата заполнения: '.$today.' 
</head>
<body>


</body>
</html>
';


$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: info <info@avedaservice.ru>\r\n";
mail($to, $subject, $message, $headers);
 
	header("Location: /");





?>