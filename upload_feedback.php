<?php
	require("mySQLiConnection.php");

	// Cek koneksi
	if($mysqli->connect_error){
		echo "$mysqli->connect_error";
		die("Connection Failed : ". $mysqli->connect_error);
	} else {
		
	// Memasukkan data ke MySQL	
		$stmt = $mysqli->prepare("insert into feedback(Name, Email, Subject, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $Email, $Subject, $Message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Feedback Sent...";
		$stmt->close();
		$mysqli->close();
	}
?>