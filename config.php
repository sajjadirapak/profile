<?php
	//Connect to database "imformation"
	$conn = mysqli_connect(
		"localHost",
		"root",
		"",
		"kankan"); 
	// Check connect database
	if ($conn) {
		echo "Connecting database";
	}else{
		echo "No Connect database";
	}
?>