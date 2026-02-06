<?php
require_once('db.php');
session_start();
$user = $_SESSION['user'];
$sql = "SELECT * FROM orders WHERE user = '$user'";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script> 
    <meta charset="utf-8">
		<title>Hotel "Sedona"</title>
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/styles.css">
    <style>
        .bb {
            border: 1px solid black;
            border-radius: 20px;
        }
        .tovar {
            width: 224px;
            height: 215px;
            margin: 10px;
            padding: 10px;
        }
        button {
            width: 100px;
            height: 40px;
            font-size:12px;
            margin-top:10px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header class="main-header clearfix">
			
				<nav class="main-navigator container ">
					<li><a href="#">Информация</a></li>
					<li><a href="#">Фото и видео</a></li>
					<li class="main-logo"><a href="index.html"><img src="img/logo.png" alt="Логотип"></a></li>
					<li><a href="#">Карта штата</a></li>
					<li><a class="hotels-active">Гостинницы</a></li>
				</nav>
				<a href="logout.php">Выйти из: <?echo ($user);?></a>
				<a href="profile.php">Мои брони</a>
		</header>
    <main class="bb" style="padding: 10px 10px 10px 10px; margin: 10px 10px 10px 10px;">
        <div class="zakaz">
            <p>
            <? 
            $i = 0;
            while ($row = $result->fetch_assoc()){
                $i++;
                echo $i , '. ';
                echo 'Отель : ' ,  $row['hotel'] , ' | ';
                echo 'Дата начала : ' , $row['datenach'] , ' | '; 
                echo 'Дата окончания : ' , $row['dateokon'] , ' | ';
                echo 'Статус : ' ,  $row['status'] , '</br>';
            }
            ?>
            </p>
        </div> 
    </main>
    
    <footer>
    </footer>
</body>
</html>