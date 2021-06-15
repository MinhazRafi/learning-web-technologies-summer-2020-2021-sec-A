<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];

		if($email == ""){
			echo "invalid email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>