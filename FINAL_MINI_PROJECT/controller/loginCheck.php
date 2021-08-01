<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$id= $_POST['id'];
		$password= $_POST['password'];

		if($id != '' && $password != ''){

			$user = validation($id, $password);
			if (count($user) > 0) {
				setcookie('flag', 'true', time()+360, '/');
				$_SESSION['id'] = $user['id'];
				$_SESSION['password'] = $user['password'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['type'] = $user['type'];
				header('location: ../view/home.php');				
			}else{
				header('location: ../view/signup.php?msg=reg');
			}
		}else{
			header('location: ../view/login.php?msg=null');
		}
	}else{
		header('location: ../view/login.php?msg=invalid');
	}
?>