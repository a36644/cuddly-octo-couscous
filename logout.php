<?php
session_start();
unset($_SESSION["logined"]);//Hủy biến $_SESSION["logined"]
$_SESSION["logined"]="";
header('location: index.php');
?>