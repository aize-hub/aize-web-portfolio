<?php
$host = "shortline.proxy.rlwy.net";
$port = "15036";
$db   = "railway";
$user = "root";
$pass = "WPqWWGjgVUYVxGWPiJPjmaQKigCYWJzz";

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
