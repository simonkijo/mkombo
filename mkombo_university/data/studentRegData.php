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
		
		//$st_regno = regGenerator();
		
		//check in db if admitted
		$query = "SELECT `reg_no`,`fname`,`mname`,`sname` FROM `mkombo_university`.`student`";
		$q_run = mysql_query($query);
		$num = mysql_num_rows($q_run);
		while($row = mysql_fetch_array($q_run)){
			$reg[] = $row['reg_no'];
			$fn[] = strtolower($row['fname']);
			$mn[] = strtolower($row['mname']);
			$sn[] = strtolower($row['sname']);
		}
		
		$fn_lower = strtolower($fname);
		$mn_lower = strtolower($mname);
		$sn_lower = strtolower($sname);
		
		for($i=0;$i<count($fn);$i++){
			if($fn_lower == $fn[$i]){
				$id_1[] = $reg[$i];
			}else{
				$error[0] = 'empty';
			}
		}
		for($i=0;$i<count($mn);$i++){
			if($mn_lower == $mn[$i]){
				$id_2[] = $reg[$i];
			}else{
				$error[1] = 'empty';
			}
		}
		for($i=0;$i<count($sn);$i++){
			if($sn_lower == $sn[$i]){
				$id_3[] = $reg[$i];
			}else{
				$error[2] = 'empty';
			}
		}
		for($i=0;$i<count($id_1);$i++){
			if(in_array($id_1[$i],$id_2)){
				if(in_array($id_1[$i],$id_3)){
					//echo $id_1[$i];
					$query_stp_info = "UPDATE `mkombo_university`.`student` SET `gender`='".$gender."', `marital_status`='".$marital_status."', `nationality`='".$nationality."', `birth_country`='".$birth_country."', `birth_date`='".$birth_date."', `password`='".hashPassword($password)."', `phone_no`='".$phone_no."', `email_address`='".$email_address."', `home_place`='".$home_place."' WHERE `reg_no`='".$id_1[$i]."'";
					$query_p_info = "INSERT INTO `mkombo_university`.`parent` VALUES('$fullname','$phone_no_p','$email_p','$physical_location','".$id_1[$i]."')";
					$query_bank_info = "INSERT INTO `mkombo_university`.`bank_account` VALUES('$bank_name','$bank_branch','$account_no','".$id_1[$i]."')";
					$query_ac_info = "INSERT INTO `mkombo_university`.`academic_info` VALUES('$index_no_olevel','$index_no_alevel','$school_name_olevel','$school_name_alevel','$sc_location_olevel','$sc_location_alevel','$cert_olevel','$cert_alevel','$completion_yr_olevel','$completion_yr_alevel','".$subjects."','$subject_combination','".$id_1[$i]."')";
					$query_ins_info = "INSERT INTO `mkombo_university`.`health_insurance` VALUES('$membership_no','$vote','$address','$issue_date','".$id_1[$i]."')";
					$query_sponsor = "INSERT INTO `mkombo_university`.`sponsor` VALUES('$sponsor_name','$sponsor_phone','$sponsor_email','".$id_1[$i]."')";
					
					if(mysql_query($query_stp_info) && mysql_query($query_p_info) && mysql_query($query_bank_info) && mysql_query($query_ac_info) && mysql_query($query_ins_info) && mysql_query($query_sponsor)){
						header('Location:studentLogin.php?response=success');
					}else{
						header('Location:studentRegistration.php?response=fail');
					}
				}
			}
		}
	}
?>