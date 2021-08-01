<?php
	session_start();
	require_once('../model/userModel.php');

	// Pass check
	if(isset($_POST['submit'])){

		$id= $_SESSION['id'];
		$password= $_POST['password'];
		$npassword= $_POST['npassword'];
		$rnpassword= $_POST['rnpassword'];

		if($password != '' && $npassword != '' && $rnpassword != ''){
			
			if ($npassword == $rnpassword) {
				if (updatePass($id, $password, $npassword)) {
					$_SESSION['password'] = $npassword;
					header('location: ../view/home.php?msg=passok');				
				}else{
					header('location: ../view/cpass.php?msg=match');
				}
			}else{
				header('location: ../view/cpass.php?msg=same');
			}
		}else{
			header('location: ../view/cpass.php?msg=null');
		}
	}else{
		header('location: ../view/cpass.php?msg=invalid');
	}
?>