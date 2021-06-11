<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="Zachet.css" rel="stylesheet" type="text/css"/>
	</head>
	<body class="body" vlink="#000">
<?php
	require_once '../includes/db2.php';
	if(isset($_POST['nomer']) && isset($_POST['name'])){
		$link = mysqli_connect($host, $user, $password, $database);
		$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
        $nomer = htmlentities(mysqli_real_escape_string($link, $_POST['nomer']));
        $query ="INSERT INTO tovars VALUES(NULL, '$name','$nomer')";
        $result = mysqli_query($link, $query);
    }
?>
		<header class="header">
			<div class="First">
				<h1>\</h1>
			</div>
			<div class="New">
				<a class="New2" href="Zachet.php">новая<br>жизнь</a>	
			</div>
			</div>
			<nav class="Shapka">
				<a class="Shapka1" href="Zachet3.php">О нас</a>
				<a class="Shapka1" href="Zachet2.php">Поддержка</a>
				<a class="Shapka1" href="Zachet4.php">Блог</a>
				<a class="Shapka1" href="#">Доставка</a>
				<p class="Shapka2" href="#"><a href="#"><img src="box.png" width="50" height="50"></a></p>
			</div>
			<div class="Sdvig">
				<h1>Для получения более подробной<br>информации заполните форму</h1>
				<h5>Мы обязательно свяжемся с Вами!</h5>
				<form method="POST">
					<input class="Vvod"type="text" name="nomer" type="text"placeholder="+7">
					<input class="Vvod" type ="text"name="name"placeholder="Имя">
					<input class="Send" type="submit" value="Отправить">
				</form>
		</header>
	</body>
</html>