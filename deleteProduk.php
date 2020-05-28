<?php
// Tahap 1
require("pdoConnection.php");
if (isset($_GET['IDProduk']) && isset($_GET['IDTransaksi'])) {
    $params = array(
        ":IDProduk"=>$_GET['IDProduk'],
        ":IDTransaksi"=>$_GET['IDTransaksi']
    );

    $sql = "DELETE FROM keranjang WHERE IDTransaksi = :IDTransaksi AND IDProduk = :IDProduk";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute($params);
}
//  redirect back
header('Location: checkout.php');
