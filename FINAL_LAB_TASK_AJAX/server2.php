<?php
	require_once("userModel.php");

	$email = $_GET['email'];

	if($email == null){
		echo 'Enter email...';
	}else{
		if(findEmail($email)){
			dltEmail($email);
			echo "Unsubscribed: ".$email;
		}else{
			echo "Invalid Email...";
		}
	}

?>
