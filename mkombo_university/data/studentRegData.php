<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//student personal info
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$sname = $_POST['sname'];
		$gender = $_POST['gender'];
		$marital_status = $_POST['marital_status'];
		$phone_no = $_POST['phone_no'];
		$email_address = $_POST['email_address'];
		$nationality = $_POST['nationality'];
		$birth_date = $_POST['birth_date'];
		$birth_country = $_POST['birth_country'];
		$home_place = $_POST['home_place'];
		$password = $_POST['password'];
		
		//student parent info
		$fullname = $_POST['fullname'];
		$phone_no_p = $_POST['phone_no_p'];
		$email_p = $_POST['email_p'];
		$physical_location = $_POST['physical_location'];
		//student bank info
		$bank_name = $_POST['bank_name'];
		$bank_branch = $_POST['bank_branch'];
		$account_no = $_POST['account_no'];
		//student olevel
		$index_no_olevel = $_POST['index_no_olevel'];
		$index_no_alevel = $_POST['index_no_alevel'];
		$school_name_olevel = $_POST['school_name_olevel'];
		$school_name_alevel = $_POST['school_name_alevel'];
		$sc_location_olevel = $_POST['sc_location_olevel'];
		$sc_location_alevel = $_POST['sc_location_alevel'];
		$cert_olevel = $_POST['cert_olevel'];
		$cert_alevel = $_POST['cert_alevel'];
		$completion_yr_olevel = $_POST['completion_yr_olevel'];
		$completion_yr_alevel = $_POST['completion_yr_alevel'];
		$subject_taken[] = $_POST['subject_taken'];
		$subjects = loopElements($subject_taken);
		$subject_combination = $_POST['subject_combination'];
		//student insurance info
		$membership_no = $_POST['membership_no'];
		$vote = $_POST['vote'];
		$address = $_POST['address'];
		$issue_date = $_POST['issue_date'];
		//sponsor info
		$sponsor_name = $_POST['sponsor_name'];
		$sponsor_phone = $_POST['sponsor_phone'];
		$sponsor_email = $_POST['sponsor_email'];
		
		$st_regno = regGenerator();
		
		if(checkEmpty()){
			$query_stp_info = "INSERT INTO `mkombo_university`.`student` VALUES('".$st_regno."','$fname','$mname','$sname','$gender','$marital_status','$nationality','$birth_country','$birth_date','".hashPassword($password)."','$phone_no','$email_address','$home_place','Not Approved')";
			$query_p_info = "INSERT INTO `mkombo_university`.`parent` VALUES('$fullname','$phone_no_p','$email_p','$physical_location','".$st_regno."')";
			$query_bank_info = "INSERT INTO `mkombo_university`.`bank_account` VALUES('$bank_name','$bank_branch','$account_no','".$st_regno."')";
			$query_ac_info = "INSERT INTO `mkombo_university`.`academic_info` VALUES('$index_no_olevel','$index_no_alevel','$school_name_olevel','$school_name_alevel','$sc_location_olevel','$sc_location_alevel','$cert_olevel','$cert_alevel','$completion_yr_olevel','$completion_yr_alevel','".$subjects."','$subject_combination','".$st_regno."')";
			$query_ins_info = "INSERT INTO `mkombo_university`.`health_insurance` VALUES('$membership_no','$vote','$address','$issue_date','".$st_regno."')";
			$query_sponsor = "INSERT INTO `mkombo_university`.`sponsor` VALUES('$sponsor_name','$sponsor_phone','$sponsor_email','".$st_regno."')";
			
			if(mysql_query($query_stp_info) && mysql_query($query_p_info) && mysql_query($query_bank_info) && mysql_query($query_ac_info) && mysql_query($query_ins_info) && mysql_query($query_sponsor)){
				$success_sms = "success";
				header('Location:studentLogin.php?response='.$success_sms);
			}else{
				$err_sms = "fail";
				header('Location:studentRegistration.php?response='.$err_sms);
			}
		}
	}
?>