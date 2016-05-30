<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuExamOfficer.php');
	include('data/courseOption.php');
	//include('data/gpaCalculation.php');
	
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
        <li class="treeview">
          <a href="#"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li><a href="#"><i class="fa fa-book"></i> <span>Add Module</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="examinationOfficer.php"><i class="fa fa-circle-o"></i> <span>Bachelor Degree</span></a></li>
					<li><a href="examOfficerDiploma.php"><i class="fa fa-circle-o"></i> <span>Ordinary Diploma</span></a></li>
				</ul>
			</li>
			<li><a href="addCourse.php"><i class="fa fa-book"></i> <span>Add Course</span></a></li>
          </ul>
        </li>
		<!--end of subjects catalog-->
		<li class="treeview">
			<a href="#"><i class="fa fa-files-o"></i> <span>GPA Computation</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="examGpaBachelor.php"><i class="fa fa-circle-o"></i> <span>Bachelor Degree</span></a></li>
				<li><a href="examGpaDiploma.php"><i class="fa fa-circle-o"></i> <span>Ordinary Diploma</span></a></li>
			</ul>
		</li>
		<!--end of GPA computation-->
		<li class="active treeview">
			<a href="#"><i class="fa fa-file-o"></i> <span>Grant Permission</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li class="active"><a href="examGrantPermission.php"><i class="fa fa-circle-o"></i> <span>Bachelor Degree</span></a></li>
				<li><a href="examGrantPermissionDiploma.php"><i class="fa fa-circle-o"></i> <span>Ordinary Diploma</span></a></li>
			</ul>
		</li>
		<li><a href="examOfficerProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Grant Permission<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="examinationOfficer.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Bachelor Degree</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
			if(isset($success)){
				if($success[1] == 'success'){
					echo "<div class='callout callout-success displaySms'>
							<h4>Successfully !</h4>
							<p>The GPA for ".$course." course, ".$year." year and ".$semester." semester is successful calculated.</p>
						</div>";
				}
				if($success[2] == 'fail'){
					echo "<div class='callout callout-danger displaySms'>
						<h4>ERROR !</h4>
						<p>Sorry something went wrong, try again.</p>
					</div>";
				}
			}
			?>
		</div>
		<div class="col-md-3"></div>
	</div>
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="form-group">
							<label></label><br>
							<button type="submit" name="" class="btn btn-primary">Allow All</button>
						</div>
					</div>
				</div>
			</form>
			<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3">
					<div class="form-group">
						<label>Department:</label><br>
						<select name="department" class="form-control select2">
						  <option selected="selected" value="">Select a Department</option>
<?php
		if(isset($course)){
			foreach($course as $c){
					echo  '<option>'.$c.'</option>';
			}
		}
?>
						</select>
					</div>
				</div>
			</div>
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3">
					<div class="form-group">
						<label>First Name:</label>
						  <input type="text" class="form-control" name="fname">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Middle Name:</label>
						  <input type="text" class="form-control" name="mname">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Surname:</label>
						  <input type="text" class="form-control" name="sname">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="gp_search" class="btn btn-primary">Search</button>
					</div>
				</div>
			</div>
			</form>
			<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin:2% auto;">
				<div class="col-md-6">
					<div class="box-body">
						<table id="academic_report_gpa" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Name</th>
								  <th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>Simon Kijo Kijo</td>
								  <td>
										<div class="col-md-3">
											<div class="form-group">
												<button type="submit" name="" class="btn btn-primary">Allow</button>
											</div>
										</div>
								  </td>
								</tr>
							</tbody>
						</table>
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