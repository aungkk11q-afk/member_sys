<?php
$host = 'localhost';
$dbname = 'member_system';
$user = 'root';
$pass = ''; // XAMPP默认密码为空

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("数据库连接失败：".$e->getMessage());
}
?>
