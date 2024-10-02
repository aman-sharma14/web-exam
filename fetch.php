<?php

	
	$conn = new mysqli('localhost','root','rootdb','mydb');

	if($conn->connect_error){
		die('Connection Failed'.$conn->connect_error);
	}


	


	$stmt = $conn->prepare('select * from groceries ');
	$stmt->execute();
	$result = $stmt->get_result();


	$html = "";
	if($row = $result->fetch_assoc()){
		
		html .= '

					<div class="item">
						<p>'.$row["item"].$row["qty"].'</p>
			
						<input type="number" name="itemQty" class="itemQty" >
						<button class="update">Update Quantity</button>

					</div>
				'


	}

	echo html;
	

?>