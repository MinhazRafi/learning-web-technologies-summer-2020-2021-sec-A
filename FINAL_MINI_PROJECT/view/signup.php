<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<fieldset style="width:100px">
			<legend>REGISTRATION</legend>
			<form method="post" action="../controller/signupCheck.php">
				<table>
					<tr>
						<td>User Id </td>
						<td><input type="text" name="id"></td>
					</tr>
					<tr>
						<td>Password </td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>Confirm Password </td>
						<td><input type="password" name="cpassword"></td>
					</tr>
					<tr>
						<td>Name </td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Email </td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>User Type </td>
						<td>
							<select name="type">
								<option value="user">User</option>
								<option value="admin">Admin</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
		</fieldset>

		<?php

            if(isset($_GET['msg'])){

					$msg = $_GET['msg'];

					if($msg == 'null'){
						echo "Null value found. Please fill up the blank fields correctly!!!";
					}
					if($msg == 'invalid'){
						echo "Invalid request, please try again!!!";
					}
					if($msg == 'pass'){
						echo "Password and confirm password should be similar!!!";
					}
					if($msg == 'reg'){
						echo "Please register first!!!";
					}
				}

        ?>

	</center>
</body>
</html>
