<?php
// Daftar fungsi-fungsi yang digunakan pada website Outfitcost
// Kevin Widjaja 00000027219

function searchProductByQuery($searchQuery)
{
    require("pdoConnection.php");
    $sql = "SELECT * FROM product WHERE Name LIKE '%$searchQuery%'";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll();
    return $result;
}

function searchProductByCategory($category)
{
    require("pdoConnection.php");
    $sql = "SELECT p.IDProduk, p.Name, p.Price, p.IDCategory, p.IDBrand, p.Picture, p.Color, p.Description FROM product p, category c WHERE p.IDCategory = c.IDCategory AND c.CategoryName LIKE '%$category%'";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getSingleProduct($idProduct)
{
    require("pdoConnection.php");
    $sql = "SELECT * FROM product WHERE IDProduk = '$idProduct'";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetch();
    return $result;
}

function getCustomerCart()
{
    require("pdoConnection.php");
    if (isset($_SESSION['IDTransaksi'])) {
        $params = array(
            ":IDTransaksi"=>$_SESSION['IDTransaksi']
        );
        $sql = "SELECT DISTINCT p.Picture, p.Name, p.Price, p.IDProduk, c.CategoryName, b.BrandName, k.jumlah 
        FROM product p, category c, brand b, keranjang k, transaksi t 
        WHERE p.IDCategory = c.IDCategory AND p.IDBrand = b.IDBrand AND k.IDProduk = p.IDProduk AND k.IDTransaksi = :IDTransaksi AND t.Status = 'DALAM KERANJANG' AND k.IDTransaksi = t.IDTransaksi";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute($params);
        if ($result = $stmt->fetchAll()) {
            return $result;
        } else {
            return null;
        }
    }
}

function getIDTransaksi($IDPembeli)
{
    require('pdoConnection.php');
    $params = array(
        ':IDPembeli' => $IDPembeli
    );
    $stmt = $pdo -> prepare("SELECT t.IDTransaksi FROM transaksi t WHERE t.IDPembeli = :IDPembeli AND t.Status = 'DALAM KERANJANG'");
    $stmt -> execute($params);
    $result = $stmt->fetch();
    $IDTransaksi = $result['IDTransaksi'];
    return $IDTransaksi;
}

function addProductToCart($IDTransaksi, $IDProduk, $jumlah)
{
    require('pdoConnection.php');
    $params = array(
        ':IDTransaksi' => $IDTransaksi,
        ':IDProduk' => $IDProduk,
        ':jumlah' => $jumlah
    );
    $paramsCek = array(
        ':IDTransaksi' => $IDTransaksi,
        ':IDProduk' => $IDProduk,
    );
    // Cek apakah di keranjang sudah ada produk tsb atau belum
    $stmtCek = $pdo -> prepare('SELECT * FROM keranjang k WHERE k.IDProduk = :IDProduk AND k.IDTransaksi = :IDTransaksi');
    $stmtCek -> execute($paramsCek);
    if ($row = $stmtCek->fetch()) {
        // Bila sudah ada, maka update saja jumlahnya
        $stmt = $pdo -> prepare('UPDATE keranjang SET jumlah = :jumlah WHERE IDProduk = :IDProduk AND IDTransaksi = :IDTransaksi');
        $stmt -> execute($params);
    } else {
        // Bila Belum, maka buat entri baru ke tabel keranjang
        $stmt = $pdo -> prepare('INSERT INTO keranjang(IDTransaksi, IDProduk, jumlah) VALUES(:IDTransaksi, :IDProduk, :jumlah)');
        $stmt -> execute($params);
    }
}