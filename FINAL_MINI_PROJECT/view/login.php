<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
        <fieldset style="width:100px" "height: 100px;">
        	<legend>LOGIN</legend>
        	<form method="post" action="../controller/loginCheck.php">
        		<table>
        			<tr>
        				<td>User Id</td>
        				<td><input type="text" name="id"> </td>
        			</tr>

        			<tr>
        				<td>Password</td>
        				<td><input type="password" name="password"> </td>
        			</tr>

        			<tr>
        				<td></td>
        				<td>
        					<hr>
        				</td>
        			</tr>

        			<tr>
        				<td></td>
        				<td> <input type="submit" name="submit" value="Login"></td>
        			</tr>
        		</table>
        	</form>
	
        </fieldset>

        <?php

				if(isset($_GET['msg'])){

					$msg = $_GET['msg'];

					if($msg == 'null'){
						echo "Null value found. Please provide correct username and password!!!";
					}else if($msg == 'wrong'){
						echo "Incorrect username or password!!!";
					}else if($msg == 'invalid'){
						echo "Invalid request. Please try again!!!";
					}
				}
			?>

    </center>
</body>
</html>