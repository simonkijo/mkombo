<?php 
	if(isset($_POST['sv_lecturer'])){
		$programme = $_POST['programme'];
		$department = $_POST['department'];
		$starting_yr = date('Y');
		
		$count = count($_POST['fname']);
		$success = Array();
		$fname = Array();
		$mname = Array();
		$sname = Array();
		
		$qr = "SELECT `fname`,`mname`,`sname` FROM `mkombo_university`.`staff` WHERE `role`='lecturer'";
		$run = mysql_query($qr);
		while($row = mysql_fetch_array($run)){
			$fna[] = strtolower($row['fname']);
			$mna[] = strtolower($row['mname']);
			$sna[] = strtolower($row['sname']);
		}
		//for validation of fname,mname and sname.
		foreach($_POST['fname'] as $fn){
			if($fn !=''){
				if(preg_match('/^[A-Za-z]+$/',$fn)){
					$fname[] = strtolower($fn);
				}else{
					$success[4] = 'invalid';
					return  $success;
				}
			}else{
				$success[3] = 'empty';
				return  $success;
			}
		}
		foreach($_POST['mname'] as $mn){
			if($mn !=''){
				if(preg_match('/^[A-Za-z]+$/',$mn)){
					$mname[] = strtolower($mn);
				}else{
					$success[4] = 'invalid';
					return  $success;
				}
			}else{
				$success[3] = 'empty';
				return  $success;
			}
		}
		foreach($_POST['sname'] as $sn){
			if($sn !=''){
				if(preg_match('/^[A-Za-z]+$/',$sn)){
					$sname[] = strtolower($sn);
				}else{
					$success[4] = 'invalid';
					return  $success;
				}
			}else{
				$success[3] = 'empty';
				return  $success;
			}
		}
		//end of validation
		if(count($fna) == 0){
			$add = '<=';
		}else{
			$add = '<';
		}
		//check if already registered.
		for($i=0;$i.$add.count($fna);$i++){
			if(in_array($fna[$i],$fname)){
				$success[5] = 'duplicate';
				$success[6] = $fna[$i];
				return $success;
			}else{
				$fname_[] = $fname;
				break;
			}
		}
		for($i=0;$i.$add.count($mna);$i++){
			if(in_array($mna[$i],$mname)){
				$success[5] = 'duplicate';
				$success[7] = $mna[$i];
				return $success;
			}else{
				$mname_[] = $mname;
				break;
			}
		}
		for($i=0;$i.$add.count($sna);$i++){
			if(in_array($sna[$i],$sname)){
				$success[5] = 'duplicate';
				$success[8] = $sna[$i];
				return $success;
			}else{
				$sname_[] = $sname;
				break;
			}
		}
		//end of already registered
		foreach($fname_ as $f){
			foreach($f as $o){
				$fo_[] = $o;
			}
		}
		foreach($mname_ as $m){
			foreach($m as $p){
				$mp_[] = $p;
			}
		}
		foreach($sname_ as $s){
			foreach($s as $t){
				$st_[] = $t;
			}
		}
		foreach($_POST['hod'] as $hod){
			$hod_[] = $hod;
		}
		
		for($i=0;$i<$count;$i++){
			$reg = regGenerator();
			$query = "INSERT INTO `mkombo_university`.`staff` VALUES('".$reg."','".$fo_[$i]."','".$mp_[$i]."','".$st_[$i]."','','','','','','','','".$starting_yr."','lecturer')";
			$qry = "INSERT INTO `mkombo_university`.`lecturer_role` VALUES('".$reg."','".$programme."','".$hod_[$i]."','".$department."')";
			$query_run = mysql_query($query);
			$query_run_1 = mysql_query($qry);
			$success_ct[] = $i;
		}
		if($query_run){
			$success[0] = count($success_ct);
			$success[1] = 'success';
			return  $success;
		}else{
			$success[0] = $count;
			$success[2] = 'fail';
			return  $success;
		}
	}
?>