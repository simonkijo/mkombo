<?php 
	$department = getRoleField('department');
	$programme = getRoleField('programme');
	$module_title = $_POST['module_title'];
	
	if(isset($_POST['sv_choose'])){
		$qr = "SELECT `year`,`semister` FROM `mkombo_university`.`modules` WHERE `module_title`='".$module_title."' AND `course`='".$department."' AND `programme`='".$programme."'";
		$qr_run = mysql_query($qr);
		while($row = mysql_fetch_array($qr_run)){
			$year = $row['year'];
			$semester = $row['semister'];
		}
		
	}else if(count(printJSONDATA($modules)) == 1){
		$mdl = printJSONDATA($modules);
		foreach(printJSONDATA($modules) as $md){
			$qr = "SELECT `year`,`semister` FROM `mkombo_university`.`modules` WHERE `module_title`='".$md."' AND `course`='".$department."' AND `programme`='".$programme."'";
			$qr_run = mysql_query($qr);
			while($row = mysql_fetch_array($qr_run)){
				$year = $row['year'];
				$semester = $row['semister'];
			}
		}
	}
	
	//insert into student_marks table , reg_no and module_title.
	if(count($mdl) == 1){
		//check if not exists & then insert
		$check = "SELECT `module` FROM `mkombo_university`.`student_marks` WHERE `module`='".$mdl[0]."'";
		$check_run = mysql_query($check);
		$num_ = mysql_num_rows($check_run);
		if($num_ == 0){
			$query_st = "SELECT `reg_no`,`fname`,`mname`,`sname` FROM `mkombo_university`.`student` WHERE `course`='".$department."' AND `programme`='".$programme."' AND `year`='".$year."' AND `semester`='".$semester."'";
			$run_st = mysql_query($query_st);
			while($row = mysql_fetch_array($run_st)){
				$reg_no[] = $row['reg_no'];
				$fname[] = $row['fname'];
				$mname[] = $row['mname'];
				$sname[] = $row['sname'];
			}
			
			for($i=0;$i<count($reg_no);$i++){
				$q = "INSERT INTO `mkombo_university`.`student_marks` VALUES('','','','','','','".$reg_no[$i]."','".$mdl[0]."')";
				$r = mysql_query($q);
			}
		}else{
			
			/*$query_st = "SELECT `reg_no`,`fname`,`mname`,`sname` FROM `mkombo_university`.`student` WHERE `course`='".$department."' AND `programme`='".$programme."' AND `year`='".$year."' AND `semester`='".$semester."'";
			$run_st = mysql_query($query_st);
			while($row = mysql_fetch_array($run_st)){
				$reg_no[] = $row['reg_no'];
				$fname[] = $row['fname'];
				$mname[] = $row['mname'];
				$sname[] = $row['sname'];
			}*/
			
			$success[5] = 'inserted';
			return $success;
		}
	}else{
		//check if not exists & then insert
		$check = "SELECT `module` FROM `mkombo_university`.`student_marks` WHERE `module`='".$module_title."'";
		$check_run = mysql_query($check);
		$num_ = mysql_num_rows($check_run);
		if($num_ == 0){
			$query_st = "SELECT `reg_no`,`fname`,`mname`,`sname` FROM `mkombo_university`.`student` WHERE `course`='".$department."' AND `programme`='".$programme."' AND `year`='".$year."' AND `semester`='".$semester."'";
			$run_st = mysql_query($query_st);
			while($row = mysql_fetch_array($run_st)){
				$reg_no[] = $row['reg_no'];
				$fname[] = $row['fname'];
				$mname[] = $row['mname'];
				$sname[] = $row['sname'];
			}
			
			for($i=0;$i<count($reg_no);$i++){
				$q = "INSERT INTO `mkombo_university`.`student_marks` VALUES('','','','','','','".$reg_no[$i]."','".$module_title."')";
				$r = mysql_query($q);
			}
		}else{
			
			/*$query_st = "SELECT `reg_no`,`fname`,`mname`,`sname` FROM `mkombo_university`.`student` WHERE `course`='".$department."' AND `programme`='".$programme."' AND `year`='".$year."' AND `semester`='".$semester."'";
			$run_st = mysql_query($query_st);
			while($row = mysql_fetch_array($run_st)){
				$reg_no[] = $row['reg_no'];
				$fname[] = $row['fname'];
				$mname[] = $row['mname'];
				$sname[] = $row['sname'];
			}*/
			
			$success[5] = 'inserted';
			return $success;
		}
	}
?>