<?php 
	if(isset($_POST['day_s'])){
		$day = $_POST['day'];
		$days = daysToJson($day);
		$lec_no = getField('lec_no');
		
		$query = "SELECT `status` FROM `mkombo_university`.`lecturer_day` WHERE `lec_no`='".$lec_no."'";
		$run = mysql_query($query);
		$result = mysql_result($run,0,'status');
		if($result == 'YES'){
			$success[3] = 'yes';
			return $success;
		}else if($result == ''){
			$query = "INSERT INTO `mkombo_university`.`lecturer_day` VALUES('".$lec_no."','".$days."','YES')";
			if(mysql_query($query)){
				$success[1] = 'success';
				return $success;
			}else{
				$success[2] = 'fail';
				return $success;
			}
		}else if($result == 'NO'){
			$query = "UPDATE `mkombo_university`.`lecturer_day` SET `day`='".$days."', `status`='YES' WHERE `lec_no`='".$lec_no."'";
			if(mysql_query($query)){
				$success[1] = 'success';
				return $success;
			}else{
				$success[2] = 'fail';
				return $success;
			}
		}
		
	}
?>