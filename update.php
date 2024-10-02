<?php

	
	$conn = new mysqli('localhost','root','rootdb','mydb');

	if($conn->connect_error){
		die('Connection Failed'.$conn->connect_error);
	}


	$item = $_POST['item'];
	$qty = $_POST['qty'];


	$stmt = $conn->prepare('update groceries set qty = ? where item = ?');
	$stmt->bind_param("is",$qty,$item);

	if($stmt->exceute()){
		echo "Item updated successfully";
	}
	else{
		echo"error";
	}

?>