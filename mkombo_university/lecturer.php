<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuLecturer.php');
	
	if(logged_in()){
		
	}else{
		header('Location: staffLogin.php');
	}
?>
  <aside class="main-sidebar">
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <li class="active"><a href="lecturer.php?user=lecturer"><i class="fa fa-files-o"></i> <span>Student Marks</span> </a></li>
<?php 
	$hod = getField('hod');
	if(isset($hod) && !empty($hod)){
		if($hod == 'yes'){
			echo '<li><a href="#"><i class="fa fa-book"></i> <span>Module Assignment</span> </a></li>
				<li><a href="#"><i class="fa fa-book"></i> <span>Add Module</span> </a></li>';
		}
	}
?>
		
		<li><a href="lecturerProfile.php?user=lecturer"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Student Marks<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="lecturer.php?user=lecturer"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Marks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-11">
					<div class="box-body">
						<table id="lecturerStudentMarks" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Reg No</th>
								  <th>Name</th>
								  <th>Continuous Assessment (%)</th>
								  <th>Final Examination (%)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>12345679</td>
								  <td>Simon Kijo</td>
								  <td>
										<div class="form-group">
											<div class="col-sm-10">
											  <input type="text" class="form-control ca_marks">
											</div>
										 </div>
								  </td>
								  <td>
										<div class="form-group">
											<div class="col-sm-10">
											  <input type="text" class="form-control fe_marks">
											</div>
										 </div>
								  </td>
								</tr>
								<tr>
								  <td>98754321</td>
								  <td>Wilson Manase</td>
								  <td>
										<div class="form-group">
											<div class="col-sm-10">
											  <input type="text" class="form-control ca_marks">
											</div>
										 </div>
								  </td>
								  <td>
										<div class="form-group">
											<div class="col-sm-10">
											  <input type="text" class="form-control fe_marks">
											</div>
										 </div>
								  </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>
			</form>
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