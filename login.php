<?php
session_start();
require "config.php";

$msg = '';
if($_POST){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute([$u]);
    $row = $stmt->fetch();
    if($row && password_verify($p,$row['password'])){
        $_SESSION['user'] = $u;
        header("Location:index.php");
        exit;
    }else{
        $msg = "账号或密码错误";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>会员登录</title>
</head>
<body>
<h3>后台登录</h3>
<?php if($msg) echo "<p style='color:red'>$msg</p>"; ?>
<form method="post">
账号：<input name="username"><br>
密码：<input type="password" name="password"><br>
<button type="submit">登录</button>
</form>
</body>
</html>
