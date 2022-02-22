<?php 
	require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Userlist</title>
</head>
<body>
    <form align="right">
	<a href="home.php" align="right"> Back</a> |
	<a href="../controllers/logout.php"> logout</a>
	</form>
	<br><br>
	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<tr>
		<td>	<?php 
		$file = fopen('../models/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);
         
		echo $userArray[0];
		echo"<br>";
		}fclose($file);
	?></td>
			<td>	<?php 
		$file = fopen('../models/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);
         
		echo $userArray[1];
		echo"<br>";
		}fclose($file);
	?></td>
			<td>	<?php 
		$file = fopen('../models/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);
         
		echo $userArray[2];
		echo"<br>";
		}fclose($file);
	?></td>
			<td>	<?php 
		$file = fopen('../models/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);
         
		echo $userArray[3];
		echo"<br>";
		}fclose($file);
	?></td>
			<td>
				<a href="edit.php?id=1"> EDIT </a> |
				<a href="delete.php"> DELETE </a><br>
				<a href="edit.php?id=2"> EDIT </a> |
				<a href="delete.php"> DELETE </a><br>
				<a href="edit.php?id=3"> EDIT </a> |
				<a href="delete.php"> DELETE </a><br>
				<a href="edit.php?id=4"> EDIT </a> |
				<a href="delete.php"> DELETE </a><br>
				<a href="edit.php?id=5"> EDIT </a> |
				<a href="delete.php"> DELETE </a><br>
			</td>
		</tr>
		
		

	</table>
</body>
</html>


