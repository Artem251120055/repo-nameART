<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users (login, pass) VALUES ('$login', '$pass')";
$conn->query($sql);

header("Location: log.php")
?>