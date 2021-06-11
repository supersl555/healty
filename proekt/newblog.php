<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="Zachet.css" rel="stylesheet" type="text/css"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
		<style>
			A{
				color: black;
				text-decoration: none;
			}
		</style>
	</head>
	<body class="body" vlink="#000">
		<header class="header">
			<div class="First">
				<h1>\</h1>
			</div>
			<div class="New">
				<a class="New2"href="Zachet.php">новая<br>жизнь</a>	
			</div>
			<nav class="Shapka">
				<a class="Shapka1" href="Zachet3.php">О нас</a>
				<a class="Shapka1" href="Zachet2.php">Поддержка</a>
				<a class="Shapka1" href="Zachet4.php">Блог</a>
				<a class="Shapka1" href="#">Доставка</a>
				<p class="Shapka2" href="#"><a href="#"><img src="box.png" width="50" height="50">
		</header>
		<h1 align="center">Вы приступили к созданию Статьи.</h1>
		<h2 align="center">Напишите как можно больше подробностей.</h2>
		<?php
		require_once '../includes/blog.php';
		?>
		<form method="POST" action="../includes/blog.php">
			<input size="30" type="text" name="NAME_BLOG" placeholder="Введите имя">
			<br><textarea class="textblog" type="text" name="TEXTIK" cols="50" rows="20" placeholder="Введите текст"></textarea>
			<br><input name="press"type="submit" value="Добавить">
		</form>
	</body>
</html>