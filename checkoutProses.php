<?php
// Tahap 1
require("pdoConnection.php");
session_start();

if (isset($_SESSION["IDTransaksi"])) {
    $params = array(
        ":IDTransaksi"=>$_SESSION['IDTransaksi']
    );

    $sql = "UPDATE transaksi SET Status = 'SELESAI' WHERE IDTransaksi = :IDTransaksi";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute($params);
    echo "<script>
    alert('Terima Kasih sudah berbelanja di Outfitcost');
    window.location.href='index.php';
    </script>";
} else {
    echo "Tidak ada Transaksi";
}

