<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$sname = $_POST['sname'];
		$gender = $_POST['gender'];
		$title = $_POST['title'];
		$phone_no = $_POST['phone_no'];
		$email_address = $_POST['email_address'];
		$nationality = $_POST['nationality'];
		$marital_status = $_POST['marital_status'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hash_pass = hashPassword($password);
		
		if(checkEmpty()){
			$query_staff = "INSERT INTO `mkombo_university`.`$title` VALUES('$fname','$mname','$sname','$username','$hash_pass','$gender','$phone_no','$email_address','$nationality','$marital_status')";
			if(mysql_query($query_staff)){
				$success_sms = "success";
				header('Location:staffLogin.php?response='.$success_sms);
			}else{
				$err_sms = "fail";
				header('Location:staffRegistration.php?response='.$err_sms);
			}
		}
	}
?>