<?php
$host = 'localhost';
$dbname = 'my_ads_site';
$username = 'admin';
$password = 'Sanyo';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Error connecting to the database: " . $e->getMessage());
}
?>
