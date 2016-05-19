<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['venue_btn'])){
			$success = Array();
			$success[0] = count($_POST['venue']);
			foreach($_POST['venue'] as $val){
				if($val != ''){
					$query = "INSERT INTO `mkombo_university`.`venue` VALUES(NULL,'".$val."')";
					if(mysql_query($query)){
						$success[1] = 'true';
						return $success;
					}else{
						$success[1] = 'false';
						return $success;
					}
				}
			}
		}
	}
?>