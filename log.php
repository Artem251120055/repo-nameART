<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Авторизация Sedona</title>
</head>
<body>
	<header class="main-header clearfix">
			<nav class="main-navigator container ">
				<li><a href="index.html">Информация</a></li>
				<li><a href="index.html">Фото и видео</a></li>
				<li class="main-logo"><a><img src="img/logo.png" alt="Логотип"></a></li>
				<li><a href="index.html">Карта штата</a></li>
				<li><a href="hotels.html">Гостинницы</a></li>
			</nav>
	</header>
    <main class="container">
		<div class="forForm">
			<form class="formss" action="loginLogic.php" method="post">
				<label for="exampleInputEmail1">Логин</label>
    			<input name="login" type="text" class="form-control" placeholder="Введите свой логин" required />
				<label for="exampleInputEmail1">Пароль</label>    			
				<input name="pass" type="password" class="form-control" placeholder="Введите свой пароль" required />
    			<button type="submit" class="btn btn-primary w-100">Войти</button>
    		</form>
			<a style="color: black; text-decoration: none;" href="reg.php">Нету аккаунта?</a>
		</div>

    </main>
</body>
</html>