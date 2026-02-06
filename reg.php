<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Регистрация Sedona</title>
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
		<div class="forForm"></div>
			<form action="registrationLogic.php" method="post">
				<label for="exampleInputEmail1">Логин</label>
    			<input name="login" type="text" class="form-control" placeholder="Придумайте логин" required />
    			<label for="exampleInputEmail1">Пароль</label>    
				<input name="pass" type="password" class="form-control" placeholder="Придумайте пароль" required />
    			   <small id="emailHelp" class="form-text text-muted">Пароль должен содержать латинские символы и цифры</small>
				<button type="submit" class="btn btn-submit w-100">Зарегестрироваться</button>
    		</form>
				<a style="color: black; text-decoration: none;" href="log.php">Есть аккаунт?</a>
        </div>
		</main>
</body>
</html>