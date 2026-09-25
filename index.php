<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>后台首页</title>
</head>
<body>
<h2>欢迎，<?php echo $_SESSION['user']; ?></h2>
<p>这是简易会员管理后台</p>
<a href="logout.php">退出登录</a>
</body>
</html>
