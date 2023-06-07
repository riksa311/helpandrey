<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/register.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Music House</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="media/images/logo.png" alt="Логотип">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalog.php">Каталог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Товар</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Где нас найти</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="auth.php">Авторизация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Регистрация</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
      </form>
    </div>
  </div>
</nav>
<div class="haster">
<form action="reg.php" method="$_GET">
  <h1>Регистрация</h1>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">ФИО</label>
    <input name="fio" type="text" class="form-control" id="fio">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Почта</label>
    <input name="login" type="email" class="form-control" id="login" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Введите настоящую почту для безопастности!</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input name="password" type="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Я согласен с правилами пользавния!</label>
  </div>
  <button type="submit" class="btn btn-primary" >Зарегистрироваться</button>
</form>
</div>
</body>
</html>