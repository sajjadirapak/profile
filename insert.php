<?php
	// Import file Config.php
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>

	<!-- Form & Insert datas to Insert_Action.php -->
	<form action="actioninsert.php" method="post">
		<label>Name: </label>
		<input type="text" name="name">
			<br><br>
		<label>Lastname: </label>
		<input type="text" name="lastname">
			<br><br>
		<label>Tel: </label>
		<input type="text" name="tel">
			<br><br>
		<button type="submit">Add</button>
	</form>
</body>
</html>