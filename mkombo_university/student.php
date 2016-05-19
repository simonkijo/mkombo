<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuStudent.php');
	//include('data/studentTimeTable.php');
	
	if(logged_in()){
		
	}else{
		header('Location: studentLogin.php');
	}
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="student.php?user=student"><i class="fa fa-table"></i> <span>Class Time Table</span> </a></li>
        <li><a href="studentSubjectsCat.php?user=student"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> </a></li>
		<!--end of subjects catalog-->
		<li><a href="studentAcademicReport.php?user=student"><i class="fa fa-files-o"></i> <span>Academic Reports</span> </a></li>
		<!--end of academic report-->
		<li><a href="studentProfile.php?user=student"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Class Time Table<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="student.php?user=student"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Class Time Table</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<div class="row" style="margin:2% auto;">
				<form method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<div class="form-group">
						<label>Year:</label><br>
						<select name="year" class="form-control select2">
						  <option selected="selected" value="">Select a Year</option>
						  <option value="first">First</option>
						  <option value="second">Second</option>
						  <option value="third">Third</option>
						  <option value="forth">Forth</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Semester:</label><br>
						<select name="semester" class="form-control select2">
						  <option selected="selected" value="">Select a Semester</option>
						  <option value="first">First</option>
						  <option value="second">Second</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="s_time" class="btn btn-primary">Show</button>
					</div>
				</div>
				</form>
			</div>
<?php
	if(isset($_POST['s_time'])){
		$year = $_POST['year'];
		$semister = $_POST['semester'];
		$course = getField('course');
		//monday.
		$query = "SELECT `module`,`time`,`v_title` FROM `time_table` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semister."' AND `day`='Monday'";
		$query_run = mysql_query($query);
		$ct = mysql_num_rows($query_run);
		while($row = mysql_fetch_array($query_run)){
			$modules_mon[] = $row['module'];
			$time_mon[] = $row['time'];
			$v_title_mon[] = $row['v_title'];
		}
		//tuesday.
		$query = "SELECT `module`,`time`,`v_title` FROM `time_table` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semister."' AND `day`='Tuesday'";
		$query_run = mysql_query($query);
		$ct = mysql_num_rows($query_run);
		while($row = mysql_fetch_array($query_run)){
			$modules_tues[] = $row['module'];
			$v_title_tues[] = $row['v_title'];
		}
		//wednesday.
		$query = "SELECT `module`,`time`,`v_title` FROM `time_table` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semister."' AND `day`='Wednesday'";
		$query_run = mysql_query($query);
		$ct = mysql_num_rows($query_run);
		while($row = mysql_fetch_array($query_run)){
			$modules_wed[] = $row['module'];
			$v_title_wed[] = $row['v_title'];
		}
		//Thursday.
		$query = "SELECT `module`,`time`,`v_title` FROM `time_table` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semister."' AND `day`='Thursday'";
		$query_run = mysql_query($query);
		$ct = mysql_num_rows($query_run);
		while($row = mysql_fetch_array($query_run)){
			$modules_thur[] = $row['module'];
			$v_title_thur[] = $row['v_title'];
		}
		//Friday.
		$query = "SELECT `module`,`time`,`v_title` FROM `time_table` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semister."' AND `day`='Friday'";
		$query_run = mysql_query($query);
		$ct = mysql_num_rows($query_run);
		while($row = mysql_fetch_array($query_run)){
			$modules_fri[] = $row['module'];
			$v_title_fri[] = $row['v_title'];
		}
?>
			<div class="row">
				<div class="col-md-12">
					<div class="box-body">
						<table id="time_table" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Time</th>
								  <th>Monday</th>
								  <th>Tuesday</th>
								  <th>Wednesday</th>
								  <th>Thursday</th>
								  <th>Friday</th>
								</tr>
							</thead>
							<tbody>

<?php
				for($i=0;$i<$ct;$i++){
						echo	'<tr>
								  <td>'.$time_mon[$i].'</td>
								  <td>'.$modules_mon[$i].'<br><p style="margin-left:50px;">'.$v_title_mon[$i].'</p></td>
								  <td>'.$modules_tues[$i].'<br><p style="margin-left:50px;">'.$v_title_tues[$i].'</p></td>
								  <td>'.$modules_wed[$i].'<br><p style="margin-left:50px;">'.$v_title_wed[$i].'</p></td>
								  <td>'.$modules_thur[$i].'<br><p style="margin-left:50px;">'.$v_title_thur[$i].'</p></td>
								  <td>'.$modules_fri[$i].'<br><p style="margin-left:50px;">'.$v_title_fri[$i].'</p></td>
								</tr>';
				}
	}
?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
	include('footer/footer.php');
	include('footer/help.php');
	include('footer/js.php');
?>