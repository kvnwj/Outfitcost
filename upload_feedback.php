<?php

	// Deklarasi variabel
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Message = $_POST['Message'];

	// Koneksi database
	$conn = new mysqli('localhost','root','','outfitcost');

	// Cek koneksi
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
	// Memasukkan data ke MySQL	
		$stmt = $conn->prepare("insert into feedback(Name, Email, Subject, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $Email, $Subject, $Message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Feedback Sent...";
		$stmt->close();
		$conn->close();
	}
?>