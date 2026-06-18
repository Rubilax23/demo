<?php
session_start();

//$conn = mysqli_connect('localhost', 'root', 'root', 'banketam');
//if (!$conn) {
//    die('Ошибка подключения к базе данных');
//}
//mysqli_set_charset($conn, 'utf8mb4');


$user = 'root';
$password = 'root';
$db = 'banketam';
$host = 'localhost';
$port = 3306;

$conn = mysqli_init();
if (!$conn) {
    die("mysqli_init failed");
}
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);
$conn->options(MYSQLI_CLIENT_SSL, true);
$conn->real_connect($host, $user, $password, $db, $port);
?>