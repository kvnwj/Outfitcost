<?php
// Tahap 1, membuat koneksi
$dbName = "inkomtek_kvnwj_outfitcost";
$serverName = "localhost";
$port = "2082";
$username = "inkomtek_root";
$password = "MultimediaNusantara";
try {
    $mysqli = new mysqli($serverName, $username, $password, $dbName, $port);
    // $mysqli->set_charset("utf8");
} catch (\Throwable $th) {
    echo "Connection failed: " . $th->getMessage();
}
