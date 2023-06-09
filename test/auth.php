<?php 
include 'header.php';
$sth = $db->query('SELECT * FROM user');
?>
<main>
<form method="$_GET" action="authorization.php">
    <div class="container d-flex justify-content-center align-items-center p-3 mt-5">
        <h1>Авторизация</h1>
        </div>
    <div class="container d-flex justify-content-center align-items-center p-5">
        
        <div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required require class="form-control" name="login" id="login" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required type="password" name="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Авторизоваться</button>
  </center>
</form>
</div>
</div>
</main>
<?php 
include 'footer.php';
?>