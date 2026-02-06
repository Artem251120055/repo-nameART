<?php
    session_start();
    require_once('db.php');
    $user = $_SESSION['user'];
    $hotel = $_POST['hotel'];
    $datenach = $_POST['datenach'];
    $dateokon = $_POST['dateokon'];
    $sql = "INSERT INTO orders (user, datenach, dateokon, hotel) VALUES ('$user', '$datenach', '$dateokon', '$hotel')";
    $conn->query($sql);
    header("Location: hotels.php");
?>