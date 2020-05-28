<?php
session_start();
require('pdoConnection.php');
require('myFunctions.php');

$IDProduk = $_POST['IDProduk'];
$jumlah = $_POST['quantity'];

// Cek apakah user sudah login
if (isset($_SESSION['IDPembeli'])) {
    // Bila user sudah login
    $IDPembeli = $_SESSION['IDPembeli'];
    // Cek apakah pembeli tersebut memiliki transaksi berstatus "DALAM KERANJANG" atau tidak
    $IDTransaksi = getIDTransaksi($IDPembeli);
    if ($IDTransaksi != null) {
        // Bila ada IDTransaksi
        addProductToCart($IDTransaksi, $IDProduk, $jumlah);
        header("Location: checkout.php");
    } else {
        // Bila tidak ada IDTransaksi
        // Server otomatis membuatkan transaksi baru dengan IDPembeli
        $params = array(
            ':IDPembeli' => $IDPembeli
        );
        $stmtCreateNewTransaksi = $pdo -> prepare('INSERT INTO transaksi(IDTransaksi, IDPembeli, Status) VALUES(NULL, :IDPembeli, "DALAM KERANJANG")');
        $stmtCreateNewTransaksi -> execute($params);

        // Baru tambahkan ke dalam keranjang dengan transaksi tsb
        $IDTransaksi = getIDTransaksi($IDPembeli);
        $_SESSION['IDTransaksi'] = $IDTransaksi;
        addProductToCart($IDTransaksi, $IDProduk, $jumlah);
        header("Location: checkout.php");
    }
} else {
    // Minta user login terlebih dahulu
    header("Location: login.php");
}
