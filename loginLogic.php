<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if($login == "admin" and $pass = "admin") {
    $_SESSION['user'] = "admin";
    header('Location: admin.php'); 
} else {
    $sql = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $login;
        header ("Location: hotels.php");
    } else {
        header ("Location: index.html");
    }
}
?>