<?php
session_start();
require('pdoConnection.php');

$idProduk = $_POST['idProduk'];
$jumlah = $_POST['quantity'];

// Cek apakah user sudah login
if (isset($_SESSION['id'])) {
    // Bila user sudah login
    $idPembeli = $_SESSION['id'];
    // Cek apakah pembeli tersebut memiliki transaksi berstatus "DALAM KERANJANG" atau tidak
    $idTransaksi = getIDTransaksi($idPembeli);
    if ($idTransaksi != null) {
        // Bila ada IDTransaksi
        addProductToCart($idTransaksi, $idProduk, $jumlah);
        header("Location: checkout.php");
    } else {
        // Bila tidak ada IDTransaksi
        // Server otomatis membuatkan transaksi baru
        $params = array(
            ':idPembeli' => $idPembeli
        );
        $stmtCreateNewTransaksi = $pdo -> prepare('INSERT INTO transaksi(IDTransaksi, IDPembeli, Status) VALUES(NULL, :idPembeli, "DALAM KERANJANG")');
        $stmtCreateNewTransaksi -> execute($params);

        // Baru tambahkan ke dalam keranjang dengan transaksi tsb
        $idTransaksi = getIDTransaksi($idPembeli);
        addProductToCart($idTransaksi, $idProduk, $jumlah);
        header("Location: checkout.php");
    }
} else {
    // Minta user login terlebih dahulu
    header("Location: login.php");
}

function getIDTransaksi($idPembeli)
{
    require('pdoConnection.php');
    $params = array(
        ':idPembeli' => $idPembeli
    );
    $stmt = $pdo -> prepare("SELECT t.IDTransaksi FROM transaksi t WHERE t.IDPembeli = :idPembeli AND t.Status = 'DALAM KERANJANG'");
    $stmt -> execute($params);
    $result = $stmt->fetch();
    return $result['IDTransaksi'];
}

function addProductToCart($idTransaksi, $idProduk, $jumlah)
{
    require('pdoConnection.php');
    $params = array(
        ':idTransaksi' => $idTransaksi,
        ':idProduk' => $idProduk,
        ':jumlah' => $jumlah
    );
    $paramsCek = array(
        ':idTransaksi' => $idTransaksi,
        ':idProduk' => $idProduk,
    );
    // Cek apakah di keranjang sudah ada produk tsb atau belum
    $stmtCek = $pdo -> prepare('SELECT * FROM keranjang k WHERE k.IDProduk = :idProduk AND k.IDTransaksi = :idTransaksi');
    $stmtCek -> execute($paramsCek);
    if ($row = $stmtCek->fetch()) {
        // Bila sudah ada, maka update saja jumlahnya
        $stmt = $pdo -> prepare('UPDATE keranjang SET jumlah = :jumlah WHERE IDProduk = :idProduk AND IDTransaksi = :idTransaksi');
        $stmt -> execute($params);
    } else {
        // Bila Belum, maka buat entri baru ke tabel keranjang
        $stmt = $pdo -> prepare('INSERT INTO keranjang(IDTransaksi, IDProduk, jumlah) VALUES(:idTransaksi, :idProduk, :jumlah)');
        $stmt -> execute($params);
    }
}
