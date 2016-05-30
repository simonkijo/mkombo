<?php 
	if(isset($_POST['calculate'])){
		$year = $_POST['year'];
		$semester = $_POST['semester'];
		$course = $_POST['course'];
		$programme = 'Ordinary Diploma';
		// modules and their credit.
		$query = "SELECT `module_title` FROM `mkombo_university`.`modules` WHERE `year`='".$year."' AND `semister`='".$semester."' AND `course`='".$course."' AND `programme`='".$programme."'";
		$run = mysql_query($query);
		while($row = mysql_fetch_array($run)){
			$module_title[] = $row['module_title'];
		}
		//sum of credits of all modules
		$query = "SELECT SUM(`credit`) AS `scredit` FROM `mkombo_university`.`modules` WHERE `year`='".$year."' AND `semister`='".$semester."' AND `course`='".$course."' AND `programme`='".$programme."'";
		$run = mysql_query($query);
		$scredit = mysql_result($run,0,'scredit');
		//students reg no.
		$st_q = "SELECT `reg_no` FROM `mkombo_university`.`student` WHERE `course`='".$course."' AND `programme`='".$programme."' AND `year`='".$year."' AND `semester`='".$semester."'";
		$st_r = mysql_query($st_q);
		while($row = mysql_fetch_array($st_r)){
			$reg_no[] = $row['reg_no'];
		}
		
		for($i=0;$i<count($module_title);$i++){
			for($j=0;$j<count($reg_no);$j++){
				$st_marks = "SELECT `grade_point_x_credit` FROM `mkombo_university`.`student_marks` WHERE `reg_no`='".$reg_no[$j]."' AND `module`='".$module_title[$i]."'";
				$st_run = mysql_query($st_marks);
				while($row = mysql_fetch_array($st_run)){
					$gpc[$i-1][$j] = $row['grade_point_x_credit'];
				}
			}
		}
		
		for($j=0;$j<count($reg_no);$j++){
			$sum[] = array_sum(array_column($gpc,$j));
		}
		
		for($i=0;$i<count($reg_no);$i++){
			$gpa[] = ($sum[$i] / $scredit);
		}
		
		for($i=0;$i<count($reg_no);$i++){
			$query_ = "INSERT INTO `mkombo_university`.`gpa` VALUES('','".$year."','".$semester."','".$gpa[$i]."','".$reg_no[$i]."')";
			$run_ = mysql_query($query_);
		}
		if($run_){
			$success[1] = 'success';
			return $success;
		}else{
			$success[2] = 'fail';
			return $success;
		}
	}
?>