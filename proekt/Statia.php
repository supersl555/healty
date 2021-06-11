<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="Zachet.css" rel="stylesheet" type="text/css"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>
	<body class="body" vlink="#000">
		<?php
			require_once '../includes/db2.php';
			$link=mysqli_connect($host, $user, $password, $database);
			$result=mysqli_query($link,"SELECT*FROM `blog`");
			$infa=mysqli_fetch_assoc($result)
		?>
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
				<p class="Shapka2" href="#"><a href="#"><img src="box.png" width="50" height="50"></a></p>
			</nav>
		</header>
		<h1 class= "Statia"align="center"><?php echo $infa['title']
		?></h1>
		<br align="center"><?php echo $infa['text']?><br>
	</body>
</html>