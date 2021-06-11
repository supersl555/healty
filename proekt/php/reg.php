<html>
<head>
	<meta charset="UTF-8"/>
	<link href="register.css" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
	<body class="body">
		<?php
			if ($_COOKIE['all_ok']==true){
				echo "Такой пользователь уже зарегестрирован";
			}if($_COOKIE['slow']==true){
				echo "Ваш логин слишком короткий";
			}
		?>
		<div class="voite">
			<h4 align="center">Регистрация</h4>
			<form action="../includes/register.php" method="post">
				<input class="vhod" name="login"><br><br>
				<input class="vhod" name="password"><br><br>
				<button class="send">Зарегистрироваться</button>
			<h4 align="center">Войти</h4>
			</form>
			<form action="../includes/auth.php" method="post">
				<input class="vhod" name="login1"><br><br>
				<input class="vhod" name="password1"><br><br>
				<button class="send">Войти</button>
			</form>
		</div>
	</body>
</html>