<?php 
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css1/css.css">
	<title>tis my Site</title>
</head>
<body>
	<!-- Шапка сайта -->
	<header class="header">
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My music Center</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="katalog.php">Каталог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gde.html">Где нас найти?</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Профиль
          </a>
          <ul class="dropdown-menu">
          <?php   if(!isset($_SESSION['role']))  {   ?>
            <li><a class="dropdown-item" href="auth.php">Авторизация</a></li>
            <li><a class="dropdown-item" href="reg.php">Регистрация</a></li>
            <? } else { ?>
            <?php   if($_SESSION['role'] == 2)  {    ?>
            <li><a class="dropdown-item" href="card.php">Корзина</a></li>
            <li><a class="dropdown-item" href="zakaz.php">Мои заказы</a></li>
            <? } ?>
            <?php   if($_SESSION['role'] == 1)  {    ?>
            <li><a class="dropdown-item" href="zakaz.php">Панель администратора</a></li>
            <? } ?>
            <?php   if(isset($_SESSION['role']))  {    ?>

            <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Выход</a></li>
            <? } ?>

            <? } ?>
          </ul>
        </li>
        </ul>
    </div>
</header>
<!-- Конец шапки сайта -->