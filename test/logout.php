<?php 
session_start();
unset($_SESSION["role"]);

return header("Location:../index.php?message=Вы вышли");
?>