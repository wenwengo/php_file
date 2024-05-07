<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<h1>登入成功</h1>  
<?php

session_start();
//如此一來下方才能直接取用 $_GET['login'];，因為SESSION每個網頁使用前需先啟用
?>

歡迎<?=$_SESSION['login'];?>

<p>
        <a href="login.php?">回登入頁</a>
        <br>
        <a href='logout.php'>登出</a>
    </p>
</body>
</html>