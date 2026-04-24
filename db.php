<?php
mysqli_report(MYSQLI_REPORT_OFF);

$defaultDatabase = 'railway';
$defaultHost = 'shortline.proxy.rlwy.net';
$defaultPort = 15036;
$defaultUser = 'root';
$defaultPass = 'WPqWWGjgVUYVxGWPiJPjmaQKigCYWJzz';

$databaseUrl = getenv('MYSQL_PUBLIC_URL') ?: getenv('MYSQL_URL') ?: getenv('DATABASE_URL') ?: '';

if ($databaseUrl !== '') {
    $parsedUrl = parse_url($databaseUrl);

    $host = $parsedUrl['host'] ?? $defaultHost;
    $port = isset($parsedUrl['port']) ? (int) $parsedUrl['port'] : $defaultPort;
    $user = $parsedUrl['user'] ?? $defaultUser;
    $pass = $parsedUrl['pass'] ?? $defaultPass;
    $db = isset($parsedUrl['path']) ? ltrim($parsedUrl['path'], '/') : $defaultDatabase;
} else {
    $host = getenv('MYSQLHOST') ?: getenv('MYSQL_HOST') ?: $defaultHost;
    $port = (int) (getenv('MYSQLPORT') ?: getenv('MYSQL_PORT') ?: $defaultPort);
    $user = getenv('MYSQLUSER') ?: getenv('MYSQL_USER') ?: $defaultUser;
    $pass = getenv('MYSQLPASSWORD') ?: getenv('MYSQL_ROOT_PASSWORD') ?: getenv('MYSQL_PASSWORD') ?: $defaultPass;
    $db = getenv('MYSQLDATABASE') ?: getenv('MYSQL_DATABASE') ?: $defaultDatabase;
}

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    throw new RuntimeException('Database connection failed: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
?>
