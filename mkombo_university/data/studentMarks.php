<?php 
	if(isset($_POST['sv_marks'])){
		$department = getRoleField('department');
		$programme = getRoleField('programme');
		
		$query = "SELECT `module` FROM `mkombo_university`.`module_assignment` WHERE `lec_no`='".getField('lec_no')."'";
		$run = mysql_query($query);
		while($row = mysql_fetch_array($run)){
			$modules = $row['module'];
		}
		
		if(count(printJSONDATA($modules)) > 1){
			$mod = printJSONDATA($modules);
			$q_marks = "SELECT `module` FROM `mkombo_university`.`student_marks`";
			$q_run = mysql_query($q_marks);
			while($row = mysql_fetch_array($q_run)){
				$m[] = $row['module'];
			}
			for($i=0;$i<count($m);$i++){
				if(in_array($m[$i],$mod)){
					$module = $m[$i];
				}
			}
			$qr = "SELECT `year`,`semister`,`credit` FROM `mkombo_university`.`modules` WHERE `module_title`='".$module."' AND `course`='".$department."' AND `programme`='".$programme."'";
			$qr_run = mysql_query($qr);
			while($row = mysql_fetch_array($qr_run)){
				$year = $row['year'];
				$semester = $row['semister'];
				$credit = $row['credit'];
			}
		}else if(count(printJSONDATA($modules)) == 1){
			$one_m = printJSONDATA($modules);
			foreach(printJSONDATA($modules) as $md){
				$qr = "SELECT `year`,`semister`,`credit` FROM `mkombo_university`.`modules` WHERE `module_title`='".$md."' AND `course`='".$department."' AND `programme`='".$programme."'";
				$qr_run = mysql_query($qr);
				while($row = mysql_fetch_array($qr_run)){
					$year = $row['year'];
					$semester = $row['semister'];
					$credit = $row['credit'];
				}
			}
		}
		
		$query_st = "SELECT `reg_no`,`fname`,`mname`,`sname` FROM `mkombo_university`.`student` WHERE `course`='".$department."' AND `programme`='".$programme."' AND `year`='".$year."' AND `semester`='".$semester."'";
		$run_st = mysql_query($query_st);
		while($row = mysql_fetch_array($run_st)){
			$reg_no[] = $row['reg_no'];
			$fname[] = $row['fname'];
			$mname[] = $row['mname'];
			$sname[] = $row['sname'];
		}
		
		if($module != ''){
			$g = $module;
		}else{
			$g = $one_m[0];
		}
		
		$cat = $_POST['ca'];
		$fet = $_POST['fe'];
		//validating ca and fe
		for($i=0;$i<count($cat);$i++){
			if($cat[$i] != ''){
				if(preg_match('/^[0-9]+$/',$cat[$i])){
					$reg[] = $reg_no[$i];
					$cat_[] = $cat[$i];
				}else{
					$success[4] = 'invalid';
					return  $success;
				}
			}else{
				$success[3] = 'empty';
				return  $success;
			}
		}
		for($i=0;$i<count($fet);$i++){
			if($fet[$i] != ''){
				if(preg_match('/^[0-9]+$/',$fet[$i])){
					//$reg[] = $reg_no[$i];
					$fet_[] = $fet[$i];
				}else{
					$success[4] = 'invalid';
					return  $success;
				}
			}else{
				$success[3] = 'empty';
				return  $success;
			}
		}
		//end of validating
		
		for($i=0;$i<count($cat_);$i++){
			$total[] = $cat_[$i] + $fet_[$i];
		}
		if($programme == 'Bachelor Degree'){
			for($i=0;$i<count($cat_);$i++){
				if($total[$i] >= 70 && $total[$i] <= 100){
					$grade[] = 'A';
					$grade_point[] = '5';
				}else if($total[$i] >= 60 && $total[$i] <= 69){
					$grade[] = 'B+';
					$grade_point[] = '4';
				}else if($total[$i] >= 50 && $total[$i] <= 59){
					$grade[] = 'B';
					$grade_point[] = '3';
				}else if($total[$i] >= 40 && $total[$i] <= 49){
					$grade[] = 'C';
					$grade_point[] = '2';
				}else if($total[$i] >= 35 && $total[$i] <= 39){
					$grade[] = 'D';
					$grade_point[] = '1';
				}else if($total[$i] >= 0 && $total[$i] <= 34){
					$grade[] = 'F';
					$grade_point[] = '0';
				}
			}
		}else if($programme == 'Ordinary Diploma'){
			for($i=0;$i<count($cat_);$i++){
				if($total[$i] >= 75 && $total[$i] <= 100){
					$grade[] = 'A';
					$grade_point[] = '5';
				}else if($total[$i] >= 65 && $total[$i] <= 74){
					$grade[] = 'B+';
					$grade_point[] = '4';
				}else if($total[$i] >= 55 && $total[$i] <= 64){
					$grade[] = 'B';
					$grade_point[] = '3';
				}else if($total[$i] >= 45 && $total[$i] <= 54){
					$grade[] = 'C';
					$grade_point[] = '2';
				}else if($total[$i] >= 35 && $total[$i] <= 44){
					$grade[] = 'D';
					$grade_point[] = '1';
				}else if($total[$i] >= 0 && $total[$i] <= 34){
					$grade[] = 'F';
					$grade_point[] = '0';
				}
			}
		}
		for($i=0;$i<count($cat_);$i++){
			$grade_p_credit[] = $grade_point[$i] * $credit;
		}
		
		for($i=0;$i<count($cat_);$i++){
			$insert_marks = "UPDATE `mkombo_university`.`student_marks` SET `ca`='".$cat_[$i]."', `fe`='".$fet_[$i]."', `total`='".$total[$i]."', `grade`='".$grade[$i]."', `grade_point_x_credit`='".$grade_p_credit[$i]."' WHERE `reg_no`='".$reg[$i]."' AND `module`='".$g."'";
			$run_suc = mysql_query($insert_marks);
		}
		if($run_suc){
			$success[1] = 'success';
			return $success;
		}else{
			$success[2] = 'fail';
			return $success;
		}
		
	}
?>