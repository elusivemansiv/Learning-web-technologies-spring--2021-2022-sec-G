<<<<<<< HEAD
<?php 

$uerror = "";
$email = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['email'] == null){
		$uerror =  "invalid email!";
	}else{
		$email = $_REQUEST['email'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
    <fieldset> <b>EMAIL</b> 
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
					<input type="text" name="email" value="<?=$email?>">
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
$email = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['email'] == null){
		$uerror =  "invalid email!";
	}else{
		$email = $_REQUEST['email'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
    <fieldset> <b>EMAIL</b> 
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
					<input type="text" name="email" value="<?=$email?>">
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