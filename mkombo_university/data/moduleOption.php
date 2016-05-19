<?php 
	if(isset($_GET['class'])){
		//computer
		if($_GET['class'] == 'computer'){
			$course = 'computer';
			$year = $_POST['year'];
			$semester = $_POST['semester'];
			if(!empty($year) && !empty($semester)){
				//$y = Array($year,$year,$year,$year,$year,$year,$year,$year,$year,$year,$year,$year,$year,$year,$year);
				//$s = Array($semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester,$semester);
				
				for($i=0;$i<15;$i++){
					$yr_sem = "INSERT INTO `mkombo_university`.`time_table` VALUES('','','','','','','".$year."','".$semester."')";
					$run = mysql_query($yr_sem);
				}
				$query = "SELECT `module_title` FROM `mkombo_university`.`modules` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semester."'";
				$query_run = mysql_query($query);
				while($row = mysql_fetch_array($query_run)){
					$data[] = $row['module_title'];
				}
			}
		}
		
	}
?>