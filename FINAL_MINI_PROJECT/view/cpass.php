<?php
	session_start();
	if(!isset($_COOKIE['flag'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<center>
		<fieldset style="width:100px">
			<legend>Change Password</legend>
			<form method="post" action="../controller/passCheck.php">
				<table>
					<tr>
						<td>Current Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" name="npassword"></td>
					</tr>
					<tr>
						<td>Retype New Password</td>
						<td><input type="password" name="rnpassword"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Change"></td>
					</tr>
				</table>
			</form>
		</fieldset>
		<a href="home.php">Go Home</a>
		<br>
		<b>
			<?php

				if(isset($_GET['msg'])){
					$msg = $_GET['msg'];

					if($msg == 'null'){
						echo "Null value found. Please provide correct username and password!!!";
					}else if($msg == 'same'){
						echo "New password and Retype New password should be similar!!!";
					}else if($msg == 'match'){
						echo "Current password doesn't match!!!";
					}else if($msg == 'invalid'){
						echo "Invalid request, please try again!!!";
					}
				}
			?>
		</b>
	</center>
</body>
</html>