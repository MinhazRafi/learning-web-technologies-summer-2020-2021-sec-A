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
		<h1>Welcome <?=$_SESSION['name']?>! </h1>
		<a href="profile.php">Profile</a> |
		<a href="cpass.php">Change Password</a> |
		<?php
			if ($_SESSION['type']=='admin') {
		?>
		<a href="view-users.php">View Users</a> |
		<?php
			}
		?>
		<a href="../controller/logout.php">logout</a>
		<br>
		<b>
			<?php

				if(isset($_GET['msg'])){
					$msg = $_GET['msg'];

					if($msg == 'passok'){
						echo "Password changed!!!";
					}
				}
			?>
		</b>	
	</center>
</body>
</html>