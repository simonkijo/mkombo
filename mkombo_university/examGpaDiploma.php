<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuExamOfficer.php');
	include('data/courseOptionDiploma.php');
	include('data/gpaDiplomaCalculation.php');
	
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
		<li class="active treeview">
			<a href="#"><i class="fa fa-files-o"></i> <span>GPA Computation</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="examGpaBachelor.php"><i class="fa fa-circle-o"></i> <span>Bachelor Degree</span></a></li>
				<li class="active"><a href="examGpaDiploma.php"><i class="fa fa-circle-o"></i> <span>Ordinary Diploma</span></a></li>
			</ul>
		</li>
		<!--end of GPA computation-->
		<li class="treeview">
			<a href="#"><i class="fa fa-file-o"></i> <span>Grant Permission</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="examGrantPermission.php"><i class="fa fa-circle-o"></i> <span>Bachelor Degree</span></a></li>
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
      <h1>GPA Computation<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="examinationOfficer.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Ordinary Diploma</li>
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
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3">
					<div class="form-group">
						<label>Year:</label><br>
						<select name="year" class="form-control select2"> 
						  <option selected="selected" value="">Select a year</option>
						  <option value="first">First</option>
						  <option value="second">Second</option>
						  <option value="third">Third</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Semester:</label><br>
						<select name="semester" class="form-control select2">
						  <option selected="selected" value="">Select a semester</option>
						  <option value="first">First</option>
						  <option value="second">Second</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Course:</label><br>
						<select name="course" class="form-control select2">
						  <option selected="selected" value="">Select a Course</option>
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
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
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