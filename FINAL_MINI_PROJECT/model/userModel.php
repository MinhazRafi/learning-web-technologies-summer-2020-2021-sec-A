<?php 

require_once('db_config.php');

function register($user)
	{
		$conn = getConnection();
		$sql = "SELECT id FROM users";
		$result = mysqli_query($conn, $sql);

		while($id = mysqli_fetch_assoc($result)){
			if ($id['id'] == $user['username']) {
				return false;
				break;
			}
		}

		$query = "INSERT INTO users(id,name,password,email,type) VALUES('{$user['id']}', 
				'{$user['name']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";
		mysqli_query($conn, $query);
		return true;
	}

function validation($id, $password)
	{
		$conn = getConnection();
		$query = "SELECT * FROM users WHERE id={$id} and password='{$password}'";
		$result = mysqli_query($conn, $query);
		$user = mysqli_fetch_assoc($result);		
		return $user;
	}

function updatePass($id, $password, $npassword)
	{
		$conn = getConnection();
		$sql = "SELECT password FROM users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$pass = mysqli_fetch_assoc($result);

		if ($pass != "" && $pass == $password) {
			$query = "UPDATE users SET password='{$npassword}' WHERE id={$id}";
			mysqli_query($conn, $query);
			return true;
		}else if($pass == ""){
			return false;
		}
	}


?>