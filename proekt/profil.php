<?php
	session_start();
	require"../includes/config.php";
?>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href="profil.css" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	<style>
		a{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
	<body>
		<div class="profil">
			<?php
				if ($_COOKIE['login']=='hartu'){
					$x=$_COOKIE['login'];
				}
			?>
			<h2 align="center">Добро пожаловать в профиль <?php echo $x;?></h2>
			<div class="profil2">
				<form method="FILE" action="../includes/reg_profil.php">
					<input type="file" name="image">
					<input type="submit" name="submit_image">
				</form>
				<h6>Редактировать фото профеля</h6>
				<h3><a href="">Редактировать информацию о себе</a></h3>
			</div>
		</div>
	</body>
</html>