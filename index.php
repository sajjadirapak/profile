<?php 
// Import file Config.php
	require 'config.php';

	//Show datas of table "people"
	$result = $conn->query("SELECT * FROM profile1");
	$Presult = $result->fetch_all();
	/*echo "<pre>".print_r($Presult,true)."<pre>";*/


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>hello hear</title>
	</head>
	<body>


	<a href="insert.php">Insert</a><br><br>
	       <h1>Order</h1>

	       <!-- Show datas of table "people" -->
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Lastname</th>
				<th>Tel</th>
				
			</tr>
		</thead>
			<?php 
				foreach ($Presult as $Order) {
			?>
			<tr>
				<td><?= @$Order[0] ?></td>
				<td><?= @$Order[1] ?></td>
				<td><?= @$Order[2] ?></td>
				<td>
					
					<button type="button" onclick="deleteItem(this)">Delete
				</button>
				</form>
				</td>>
				
			
			</tr>
			<?php } ?>
	</table>

	
	</body>
	</html>