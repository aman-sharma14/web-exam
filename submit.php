<?php

	
	$conn = new mysqli('localhost','root','rootdb','mydb');

	if($conn->connect_error){
		die('Connection Failed'.$conn->connect_error);
	}


	$item = $_POST["item"];
	$qty = $_POST["qty"];


	$stmt = $conn->prepare('Insert into groceries values(?,?)');
	$stmt->bind_param("si",$item,$qty);

	if($stmt->execute()){
		echo "Item added successfully";
	}
	else{
		echo"error";
	}

?>