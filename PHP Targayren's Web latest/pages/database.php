<?php
$host = 'localhost';
$db = 'Leesa_Art_Gallery_Database';
$user = 'root'; // your MySQL username
$pass = '1234'; // your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
