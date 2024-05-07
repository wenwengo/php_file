<?php
session_start();
unset($_SESSION['login'],$_SESSION['error']);
// 

header("location:login.php");
// 網頁跳轉到login.php
?>
