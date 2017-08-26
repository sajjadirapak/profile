<?php
	// Import file Config.php
	require 'config.php';
	// Get datas from Insert.php
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$tel = $_POST['tel'];
	$sql = "INSERT INTO profile1(name, lastname, tel) VALUES('$name', '$lastname', '$tel')";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert_Action</title>
</head>
<body>

	<!-- Check insert datas -->
	<?php
		if ($result == 1) 
	{ ?>
	<p>Success</p>
	<a href="index.php">Go to home page</a>

	<?php }
		else
	{ ?>
	<p>UnSuccess</p>
	<a href="index.php">Go to home page</a>

	<?php } ?>
</body>
</html>