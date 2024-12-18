<?php
$host = 'localhost';
$port = '5432';
$dbname = 'your_db_name';
$user = 'your_db_user';
$password = 'your_db_password';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}
?>
