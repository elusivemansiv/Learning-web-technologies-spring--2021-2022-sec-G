<<<<<<< HEAD
<?php 

$uerror = "";
$username = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['username'] == null){
		$uerror =  "invalid username!";
	}else{
		$username = $_REQUEST['username'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
    <fieldset><b>NAME</b>
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
					<input type="text" name="username" value="<?=$username?>">
				</td>
				<td>
					<?=$uerror?>
				</td>
			</tr>
			<tr>
			
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
    </fieldset>
</body>
=======
<?php 

$uerror = "";
$username = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['username'] == null){
		$uerror =  "invalid username!";
	}else{
		$username = $_REQUEST['username'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
    <fieldset><b>NAME</b>
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
					<input type="text" name="username" value="<?=$username?>">
				</td>
				<td>
					<?=$uerror?>
				</td>
			</tr>
			<tr>
			
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
    </fieldset>
</body>
>>>>>>> 1f8607335049628cb5dea358064143cd6285d1b5
</html>