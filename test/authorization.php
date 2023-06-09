<?php  
session_start();
require 'db.php';

$login =$_GET['login'];
$password =$_GET['password'];
$sth = $db->query("SELECT role FROM `user` where login ='$login' and password = '$password'")->fetchAll(2);
$_SESSION['role'] = ($sth[0]['role']);


header("Location:index.php");
?>
