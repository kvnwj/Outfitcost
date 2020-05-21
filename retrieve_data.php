<?php
require("mySQLiConnection.php");
    
    // Cek koneksi
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }   

    $sql = "SELECT IDProduk, Name, Price, Picture FROM product";
   
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
    
    // Menampilkan data
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["Name"]. "<br>";
        echo " Price: " . $row["Price"]. "<br>"; 
        echo " Picture: " . $row["Picture"]. "<br>";
        echo "img src='",$row['Picture'],"' width='175' height='200' />";
        echo "<br>";
    }
} else {
  echo "0 results";
}
$mysqli->close();
?>