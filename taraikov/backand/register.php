<?php
session_start(); 

require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `users`(`id`, `login`, `pass`, `email`) VALUES (NULL,'$login','$pass','$email')";

$connect -> query($sql);
header ('Location:../index.php')
?>