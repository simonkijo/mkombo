<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_GET['class'])){
			//computer
			if($_GET['class'] == 'computer'){	
				if(isset($_POST['create'])){
					$modules = Array();
					$start_time = Array();
					$end_time = Array();
					$venue = Array();
					$day = Array('Monday','Monday','Monday','Tuesday','Tuesday','Tuesday','Wednesday','Wednesday','Wednesday','Thursday','Thursday','Thursday','Friday','Friday','Friday');
					$ct = count($_POST['module_title']);
					
					$qr = "SELECT * FROM `mkombo_university`.`time_table`";
					$qr_run = mysql_query($qr);
					$co = mysql_num_rows($qr_run);
					
					$course = 'computer';
					foreach($_POST['module_title'] as $md){
						$modules[] = $md;
					}
					foreach($_POST['start_time'] as $st){
						$start_time[] = $st;
					}
					foreach($_POST['end_time'] as $et){
						$end_time[] = $et;
					}
					foreach($_POST['venue'] as $ve){
						$venue[] = $ve;
					}
					
					if($co == $ct){
						$i=0;
						while($i<$ct){
							$query = "UPDATE `mkombo_university`.`time_table` SET `day`='".$day[$i]."', `module`='".$modules[$i]."', `time`='".$start_time[$i]."-".$end_time[$i]."', `v_title`='".$venue[$i]."', `course`='".$course."' WHERE `id_time_table`='".($i+1)."'";
							$run = mysql_query($query);
							$i++;	
						}
					}
					if($co > $ct){
						$i = ($co-$ct);
						while($i<$co){
							$query = "UPDATE `mkombo_university`.`time_table` SET `day`='".$day[$i]."', `module`='".$modules[$i]."', `time`='".$start_time[$i]."-".$end_time[$i]."', `v_title`='".$venue[$i]."', `course`='".$course."' WHERE `id_time_table`='".($i+1)."'";
							$run = mysql_query($query);
							$i++;
						}
					}
					if($run){
						$tm_success = 'success';
						return $tm_success;
					}else{
						$tm_fail = 'fail';
						return $tm_fail;
					}
				}
			}
			
		}
	}
?>