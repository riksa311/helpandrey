<?php
$fio = $_GET ['fio'];
$login = $_GET ['login'];
$password = $_GET ['password'];
$link = mysqli_connect('localhost', 'root', 'root', 'reg');
if (!$link) {
    die('Could not connect: ');
}
echo 'Connected successfully';
$sql = sprintf("INSERT INTO register VALUES(NULL, '%s', '%s', '%s')",
$fio, $login, $password);
    if(!$link->query($sql))
        return die("Ошибка добавления данных: ". $link->error);
mysqli_close($link);
?>