<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$db_name = 'toacedemy_db';

try {
    $conn = new PDO("mysql:host=$mysql_host;dbname=$db_name", $mysql_user, $mysql_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}