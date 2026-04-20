<?php
$host = "gateway01.ap-northeast-1.prod.aws.tidbcloud.com";
$port = 4000;
$db   = "portfolio_dbase";
$user = "4UCXkB8duQNEPVC.root";
$pass = "otHufQODKCa7HBi0";

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Connected to TiDB!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>