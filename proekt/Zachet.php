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
				<a class="Shapka1" href="Zachet4.php">Доставка</a>
				<img src="box.png" href="Statia2.php" width="50" height="50">
				<?php if($_COOKIE['login']==TRUE):?>
  					<a class="Shapka1" href="profil.php">Профиль</a>
				<?php else:?>
					<a class="Shapka1" href="reg.php">Войти</a>/<a class="Shapka1"href="reg.php">Регистрация</a>
				<?php endif;?>
			</nav>
			<div>
				<h1 class="Text"><?php echo $config['title']?>МЫ УЛУЧШИМ ВАШУ<br> ЖИЗНЬ!</h1>
			</div>
			<div class="man">
				<p><a href="#"><img src="man.png" with="50" height="50"></a></p>
			</div>
			<div class="Vegetables">
				<pc><a href="#"><img src="Vegetables.png" width="50" height="50"></a></p>
			</div>
			<div class="Position">
				<div>
					<h2 class="Text2">Любые фрукты и овощи<br> на ваш выбор</h2>
				</div>
				<div>
					<h2 class="Text3">Доставка в любую<br> точку города</h2>
				</div>
				<a class="Knopka" href="catalog.php">Магазин</a>
			</div>
			<div class="Foto">
				<img src="Obo2.png" width="800" height="550">
		</header>
	</body>
</html>