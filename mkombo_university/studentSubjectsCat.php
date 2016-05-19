<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuStudent.php');
	
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
        <li><a href="student.php?user=student"><i class="fa fa-table"></i> <span>Class Time Table</span> </a></li>
        <li class="active"><a href="studentSubjectsCat.php?user=student"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> </a></li>
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
      <h1>Subjects Catalogue<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="student.php?user=student"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subjects Catalogue</li>
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
						<button type="submit" name="show_subjects" class="btn btn-primary">Show</button>
					</div>
				</div>
				</form>
			</div>
<?php 
	if(isset($_POST['show_subjects'])){
		$year = $_POST['year'];
		$semister = $_POST['semester'];
		$course = getField('course');
		
		$query = "SELECT `code`,`module_title`,`credit` FROM `mkombo_university`.`modules` WHERE `course`='".$course."' AND `year`='".$year."' AND `semister`='".$semister."'";
		$run = mysql_query($query);
		$count = mysql_num_rows($run);
		while($row = mysql_fetch_array($run)){
			$code[] = $row['code'];
			$module[] = $row['module_title'];
			$credit[] = $row['credit'];
		}
?>
			<div class="row">
				<div class="col-md-11">
					<div class="box-body">
						<table id="studentSubjectsCat" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Code</th>
								  <th>Module Title</th>
								  <th>Credit</th>
								</tr>
							</thead>
							<tbody>
<?php
			for($i=0;$i<$count;$i++){
						echo	'<tr>
								  <td>'.$code[$i].'</td>
								  <td>'.$module[$i].'</td>
								  <td>'.$credit[$i].'</td>
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