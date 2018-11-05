<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GB</title>
	<link rel="stylesheet" href="style.css">
		<script type="text/javascript">

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

				<h1>Игра в Загадки</h1>

				<div class="box"> <!-- Вся игра будет здесь -->

					<?php

						if ((isset($_GET['userAnswer1'])) && (isset($_GET['userAnswer2'])) && (isset($_GET['userAnswer3']))) {
													
							$score = 0;
							$questionsQount = 3;
							$userAnswer = $_GET["userAnswer1"]; //возьмем из адресной строки
							if($userAnswer == "обезьяна" || $userAnswer == "макака" || $userAnswer == "горилла" || $userAnswer == "шимпанзе" || $userAnswer == "мартышка" || $userAnswer == "примат"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer2"]; //возьмем из адресной строки
							if($userAnswer == "петух" || $userAnswer == "петушок" || $userAnswer == "петел" || $userAnswer == "кочет"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer3"]; //возьмем из адресной строки
							if($userAnswer == "зима" || $userAnswer == "холод" || $userAnswer == "зимушка"){
								$score++;
							}

							echo "Количество правильных ответов: " . $score . " из " . $questionsQount . ".";
						}
					?>

					<form method="GET"> <!-- Ин -->
						<p> С пальмы вниз, на пальму снова <br>Ловко прыгает…</p>
						<input type="text" name="userAnswer1"> <!-- Поле для ввода -->

						<p> Кукарекает спросонок <br>Милый, добрый… </p>
						<input type="text" name="userAnswer2"> <!-- Поле для ввода -->

						<p> Белым снегом всё одето —  <br>Значит, наступает… </p>
						<input type="text" name="userAnswer3"> <!-- Поле для ввода -->
						<br>
						<input type="submit" value="Ответить" name="">
					</form>
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