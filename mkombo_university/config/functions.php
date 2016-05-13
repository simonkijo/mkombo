<?php 
	ob_start();
	session_start();
	//get any field from logged in user.
	function getField($field){
		if(isset($_GET['user'])){
			$user = $_GET['user'];
			$staff = Array("lecturer","admission_officer","examination_officer","time_table_master");
			if(in_array($user,$staff)){
				$query = "SELECT `$field` FROM `mkombo_university`.`$user` WHERE `username`='".$_SESSION['username']."'";
				if($query_run = @mysql_query($query)){
					if($query_result = @mysql_result($query_run, 0, $field)){
						return $query_result;
					}
				}
			}else if($user == "student"){
				$query = "SELECT `$field` FROM `mkombo_university`.`$user` WHERE `reg_no`='".$_SESSION['user_id']."'";
				if($query_run = @mysql_query($query)){
					if($query_result = @mysql_result($query_run, 0, $field)){
						return $query_result;
					}
				}
			}
		}
	}
	//student info
	function getInfo($field,$table){
		$query = "SELECT `$field` FROM `mkombo_university`.`$table` WHERE `reg_no`='".$_SESSION['user_id']."'";
		if($query_run = @mysql_query($query)){
			if($query_result = @mysql_result($query_run, 0, $field)){
				return $query_result;
			}
		}
	}
	//reg id generator
	function regGenerator(){
		$year = date('Y');
		$f_c = substr($year,0,1);
		$f_sc = substr($year,1,1);
		$l_2 = substr($year,2,3);
		$n = substr(mt_rand(),0,8);
		
		if(strlen($n) == '7'){
			$v = $n.substr(mt_rand(),0,1);
			return $l_2.$f_sc.$f_c.$v;
		}else{
			return $l_2.$f_sc.$f_c.$n;
		}
	}
	//check empty in post.
	function checkEmpty(){
		if(!empty($_POST)){
			return true;
		}else{
			return false;
		}
	}
	//password encypt
	function hashPassword($pass){
		$hash = md5($pass);
		return $hash;
	}
	//loop value of subjects taken and adding comma.
	function loopElements($parameter){
		foreach($parameter as $r){
			$c = count($r);
			for($i=0;$i<$c;$i++){
				if($i<($c-1)){
					$v = ',';
				}else{
					$v = '';
				}
				$result[] = $r[$i].$v;
			}
		}
		$bn = json_encode($result);
		return $bn;
	}
	//for printing subject taken
	function printSubjects($para){
		$th = json_decode($para);
		foreach($th as $t){
			echo $t;
		}
	}
	//for checking if user is logged in
	function logged_in(){
		if((isset($_SESSION['user_id']) || isset($_SESSION['username'])) && (!empty($_SESSION['user_id']) || !empty($_SESSION['username']))){
			return true;
		}else{
			return false;
		}
	}
?>