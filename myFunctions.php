<?php

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
