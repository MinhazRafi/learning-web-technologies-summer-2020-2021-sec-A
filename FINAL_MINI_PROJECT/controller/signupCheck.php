<?php 
 session_start();
 require_once('../model/userModel.php');

 if(isset($_POST['submit'])){

 	$id = $_POST['id'];
 	$password = $_POST['password'];
 	$cpassword = $_POST['cpassword'];
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$type = $_POST['type'];

 	if($id !='' && $password !='' && $cpassword != '' && $name != '' && $email != '' && $type !=''){
 		if($password == $cpassword){

 			$user = ['id'=>$id, 'password'=>$password, 'cpassword'=>$cpassword, 'email'=>$email, 'type'=>$type];

 			if (register($user)) {
					header('location: ../view/login.php?msg=ok');
				}else{
					header('location: ../view/signup.php?msg=reg');
				}
				   
 		}else{
				header('location: ../view/signup.php?msg=pass');
			}
 	}else{
			header('location: ../view/signup.php?msg=null');
		}

 }else{
		header('location: ../view/signup.php?msg=invalid');
	}

?>