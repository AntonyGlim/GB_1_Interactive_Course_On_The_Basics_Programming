<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GB</title>
	<link rel="stylesheet" href="style.css">
</head>
<body >

<div class="content">
<?php
	include "menu.php"; // включить файл здесь
?>

	<h1>Личный сайт студента GB</h1>

	<div class="center">
		<img src="img/foto.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>.<br><br> Меня зовут Антон Яценко. 
			Я совсем недавно начал программировать, 
			однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этой странице вы сможете сыграть 
				в несколько игр, которые я написал. 
			</p>
		</div>	
	</div>
</div>

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Antony Glim
</div>	

</body>
</html>