<?php 
	if(isset($_POST['sv_stDiploma'])){
		$programme = 'Ordinary Diploma';
		$course = $_POST['course'];
		$year = $_POST['year'];
		$semester = $_POST['semester'];
		$starting_yr = date('Y');
		
		$count = count($_POST['fname']);
		$success = Array();
		$fname = Array();
		$mname = Array();
		$sname = Array();
		
		$qr = "SELECT `fname`,`mname`,`sname` FROM `mkombo_university`.`student`";
		$run = mysql_query($qr);
		while($row = mysql_fetch_array($run)){
			$fna[] = strtolower($row['fname']);
			$mna[] = strtolower($row['mname']);
			$sna[] = strtolower($row['sname']);
		}
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
		
		for($i=0;$i<$count;$i++){
			$query = "INSERT INTO `mkombo_university`.`student` VALUES('".regGenerator()."','".$fo_[$i]."','".$mp_[$i]."','".$st_[$i]."','','','','','','','','','','".$course."','".$programme."','".$starting_yr."','".$year."','".$semester."')";
			$query_run = mysql_query($query);
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