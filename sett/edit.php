<?php require_once ("sett.php");

if (empty($_COOKIE["login"])) { header("Location: index.php");}

$id=$_GET["id"];

if($id==1){$codevers=$code;}
if($id==2){$codevers=$code_eng;}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Редактирование</title>
	<link rel="stylesheet" type="text/css" href="reset.css"/>
<link rel="stylesheet" type="text/css" href="css.css" />

	
	
</head>

<body>
	
	
	<div class="wrap">
		<div class="top"></div>
		
		<div class="grid">
	
	<div class="r_left">
	<div ><a href="edit.php?id=1" class="r_left_menu">Главная</a></div>
	<div ><a href="edit.php?id=2"class="r_left_menu" >Главная анг версия</a></div>
	<div ><a href="exit.php"class="r_left_menu" >Выход</a></div>
	
	
	</div>
		
			<div class="r_riht">
							

				
				<?php if(!empty($id)) {	?>	
				
	<form action="up.php" method="post">
	<div ><textarea name="text"   class="forma__text"><?=$codevers?></textarea></div>
		<input type="hidden"  name="id" value="<?=$id?>">
	
		
	<div >	<input type="submit" value="Обновить" class="forma_boot" /></div>
	
	</form>
				
			<?php } else { 	?>	
				
				
				<h1>Редактирование  </h1>	
				<div class="edit_box">
	<div ><a href="edit.php?id=1" >Главная</a></div>
	<div ><a href="edit.php?id=2"  >Главная анг версия</a></div>
				
				</div>
			<?php } 	?>		
				
	
	
	</div>
	</div>
	
	</div>
	
	
	
</body>
</html>