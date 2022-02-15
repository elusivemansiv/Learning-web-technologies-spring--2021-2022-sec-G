<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table align="center" border="1" height="200" width="300">
    <tr>
        <td>
    
    <form action="bio.php" method="POST" align="center">
        <img src="img/211866470_119291403713010_3555733378247296684_n.png" alt="" height="150px" width="150px">
        <h3 align="center">Login</h3>
     
     <input type="text" name="username" placeholder="enter username">
     <br>
     <br>
     
     <input type="email" name="email" placeholder="enter email">
     <br>
     <br>
     

     <input type="number" name="phone" placeholder="enter phonenumber"><br>
     <br>

     <input type="number" name="age" placeholder="enter your age"><br>
     <br>
     <input type="date" name="dob"><br><br>
     <input type="Submit" class="btn btn-success" value="submit data" name="btn"><br><br>
     
    </form>
    </td>
    </tr>
    </table>
</body>
</html>