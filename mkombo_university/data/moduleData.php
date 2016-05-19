<?php 
	error_reporting('E_NOTICE');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_GET['class'])){
			//computer
			if($_GET['class'] == 'computer'){
				if(isset($_POST['sv_modules'])){
					$course = 'computer';
					$year = $_POST['year'];
					$semester = $_POST['semester'];
					
					//counting input field.
					$count = count($_POST['code']);
					$md_success = Array();
					$cd = Array();
					$md = Array();
					$cre = Array();
					
					foreach($_POST['code'] as $code){ 
						$cd[] = $code;
					}
					foreach($_POST['module_title'] as $module){ 
						$md[] = $module;
					}
					foreach($_POST['credit'] as $credit){ 
						$cre[] = $credit;
					}
					for($i=0;$i<$count;$i++){
						$query = "INSERT INTO `mkombo_university`.`modules` VALUES('','".$cd[$i]."','".$md[$i]."','".$course."','".$year."','".$semester."','".$cre[$i]."')";
						$query_run = mysql_query($query);
					}
					
					if($query_run){
						$md_success[0] = $count;
						$md_success[1] = 'success';
						return $md_success;
					}else{
						$md_success[0] = $count;
						$md_success[1] = 'fail';
						return $md_success;
					}
				}
			}
		}
	}
?>