<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GB</title>
	<link rel="stylesheet" href="style.css">
		<script type="text/javascript">

		function readInt() {
			return +document.getElementById("userAnsver").value;
		}

		function write(id, text) {
			document.getElementById(id).innerHTML = text; //заменить текст
		}	

		function generateText(letters, length) { //Функция генерирует последовательность случайных символов (строку)
			var text = "";
			for (var i = 0; i < length; i++) {
				var n = getRandomNumber(letters.length);
				text += letters[n];
			}
			return text;
		}

		function getRandomNumber(max) { //Генерирует случайное число
			return parseInt(Math.random() * max); 
		}

		var sumbols = ["a", "b", "c", "d", "1", "2", "3", "4", ".", "-", "_", "A", "B", "C", "D"];

		function mainFunction() {
			var answer = readInt();
			var pass = generateText(sumbols, answer);
			write("info", "<b>Ваш пароль: " + pass + "</b>");
		}
			
		</script>
		
</head>
<body >

<div class="content">
	<?php
		include "menu.php"; // включить файл здесь
	?>

	<div class="contentWrap"></div>
		<div class="content">
			<div class="conter">

				<h1>Генератор случайных паролей</h1>

				<div class="box"> <!-- Вся игра будет здесь -->

					<p id="info">Введите длину пароля</p>
					<input type="text" id="userAnsver"> <!-- Поле для ввода -->
					<br>
					<a href="#" onclick ="mainFunction();" id="button">Сгенерировать</a>


				</div>
			</div>
		</div>
	</div>

</div>

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Antony Glim
</div>	

</body>
</html>