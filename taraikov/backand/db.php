<?php
session_start(); 

$servername = "127.0.0.1";
$username = "root";
$Password = "";
$dbname = "registerUser";

$connect = mysqli_connect($servername, $username, $Password, $dbname);

if(!$connect){
    die("Connection Fialed". mysqli_connect_error());
} 
?>