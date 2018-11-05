<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GB</title>
	<link rel="stylesheet" href="style.css">
		<script type="text/javascript">

			var answer = parseInt(Math.random() * 100);
			var trayCount = 0;
			var maxTrayCount = 10;

			function readInt() {
				return +document.getElementById("userAnsver").value;
			}

			function write(text) {
				document.getElementById("info").innerHTML = text; //заменить текст
			}

			function hide(id) {
				document.getElementById(id).style.display = "none";
			}

			function guessingGame() {
				trayCount++;
				var userAnsver = readInt();
				if(userAnsver == answer){
					write("<b>Поздравляем! Вы угадали!</b>");
					hide("userAnsver");
					hide("button");
				} else if (trayCount >= maxTrayCount) {
					write("<b>К сожалению, вы проиграли!<br>Правильный ответ:  " + answer + "</b>");
					hide("userAnsver");
					hide("button");
				} else if (userAnsver > answer) {
					write("Ваше число <b>больше</b> чем ответ<br> Попробуйте еще раз!<br><br>Количество оставшихся попыток: " + "<b>" + (maxTrayCount - trayCount) + "</b>");
				} else {
					write("Ваше число <b>меньше</b> чем ответ<br> Попробуйте еще раз!<br><br>Количество оставшихся попыток: " + "<b>" + (maxTrayCount - trayCount) + "</b>");
				}
	

				
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

				<h1>Игра Угадайка</h1>

				<div class="box"> <!-- Вся игра будет здесь -->

					<p id="info">Угадайте число от 0 до 100</p>
					<input type="text" id="userAnsver"> <!-- Поле для ввода -->
					<br>
					<a href="#" onclick ="guessingGame();" id="button">Ответить</a>


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