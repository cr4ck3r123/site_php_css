<?php
//arquivo logout

session_start(); // recupero a sessão para poder usar
unset($_SESSION['login']);
unset($_SESSION['password']);
header('location:index.php');
?>
