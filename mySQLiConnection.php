<?php
// Tahap 1, membuat koneksi
$dbName = "inkomtek_kvnwj_outfitcost";
$serverName = "localhost";
$port = null;
$username = "root";
$password = "";
try {
    $mysqli = new mysqli($serverName, $username, $password, $dbName, $port);
    $mysqli->set_charset("utf8");
} catch (\Throwable $th) {
    echo "Connection failed: " . $th->getMessage();
}
