<?php
	require_once("db-config.php");

	function addEmail($email)
	{
		$conn = getConnection();
		$sql = "INSERT INTO subscribe VALUES('{$email}')";
		mysqli_query($conn,$sql);
	}

	function dltEmail($email)
	{
		$conn = getConnection();
		$sql = "DELETE from subscribe WHERE email='{$email}'";
		mysqli_query($conn,$sql);
	}

	function findEmail($email)
	{
		$conn = getConnection();
		$sql = "SELECT email FROM subscribe WHERE email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$email = mysqli_fetch_assoc($result);
		return $email;
	}
?>