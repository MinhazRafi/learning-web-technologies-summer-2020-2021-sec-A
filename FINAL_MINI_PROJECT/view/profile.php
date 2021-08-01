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
		<h3>Profile</h3>
		<table border="1">
			<tr>
				<td>ID </td>
				<td> <?=$_SESSION['id']?></td>
			</tr>
			<tr>
				<td>Name </td>
				<td> <?=$_SESSION['name']?></td>
			</tr>
			<tr>
				<td>Email </td>
				<td> <?=$_SESSION['email']?></td>
			</tr>
			<tr>
				<td>User Type </td>
				<td> <?=$_SESSION['type']?></td>
			</tr>
		</table>
		<a href="home.php">Go Home</a>
	</center>
</body>
</html>