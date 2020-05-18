<?php
// Tahap 1, membuat koneksi
$dbName = "inkomtek_kvnwj_outfitcost";
$serverName = "localhost";
$port = "";
$username = "root";
$password = "";
try {
    $pdo = new PDO("mysql:hostname=$serverName;dbname=$dbName;port=$port", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}