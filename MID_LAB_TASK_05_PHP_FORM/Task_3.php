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
    <fieldset> <b>DATE OF BIRTH</b> 
	<form method="POST" action="#">
		<table>
			<tr>

				<td>
					<input type="date" name="date" value="<?=$date?>">
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
</html>