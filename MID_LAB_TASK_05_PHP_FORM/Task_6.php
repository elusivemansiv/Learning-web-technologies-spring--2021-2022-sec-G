<<<<<<< HEAD


<?php 

$uerror = "";
$date = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['date'] == null){
		$uerror =  "invalid DOB!";
	}else{
		$date = $_REQUEST['date'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
    <fieldset> <b>BLOOD GROUP</b> 
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
                    <select name="blood group">
                        <option value="O+">O+</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                    </select>
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
$date = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['date'] == null){
		$uerror =  "invalid DOB!";
	}else{
		$date = $_REQUEST['date'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
    <fieldset> <b>BLOOD GROUP</b> 
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
                    <select name="blood group">
                        <option value="O+">O+</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                    </select>
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