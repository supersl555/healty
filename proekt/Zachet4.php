<?php
	session_start();
	require"../includes/config.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="Zachet.css" rel="stylesheet" type="text/css"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
		<style>
			a{
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
		<h1 align="center">Здесь вы можете увидить различные блоги</h1>
		<p>
			<a href="Statia.php"><img class="History" src="../photo/Zdorov.jpg"></a>
			<a href="#"><img class="History" src="../photo/Zdorov.jpg"></a>
		</p>
		<table class="blog">
			<tr>
				<td>Здоровый образ жизни</td>
				<td>Спортивное питание</td>
			</tr>
		</table>
		<a href="newblog.php" align="center"><h1 class="texta">Создайте свой блог</h1></a>
	</body>
</html>