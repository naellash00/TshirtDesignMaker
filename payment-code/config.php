<?php
// conn variable to connect with the database
	$conn = new mysqli("localhost","root","","cart_system");
	//Verify the connection
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>