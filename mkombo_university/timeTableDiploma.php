<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuTimeTableMaster.php');
	//include('data/venueData.php');
	
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
        <li><a href="timeTableMaster.php"><i class="fa fa-th"></i> <span>Venue Management</span> </a></li>
		<li class="active treeview">
          <a href="#"><i class="fa fa-table"></i> <span>Class Time Table</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li><a href="timeTableBachelor.php"><i class="fa fa-book"></i> <span>Bachelor Degree</span> </a></li>
			<li class="active"><a href="timeTableDiploma.php"><i class="fa fa-book"></i> <span>Ordinary Diploma</span> </a></li>
          </ul>
        </li>
		<!--end of class time table-->
		<li><a href="timeMasterProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
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
        <li><a href="timeTableMaster.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Class Time Table</li>
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
				if($success[1] == 'true'){
					if($success[0] > 1){
						$s = 's'; $are = 'are'; $the = '';
					}else{
						$s = ''; $are = 'is'; $the = 'A';
					}
					echo "<div class='callout callout-success displaySms'>
							<h4>Successfully !</h4>
							<p>".$the." venue".$s." ".$are." successful added</p>
						</div>";
				}else if($success[1] == 'false'){
					echo "<div class='callout callout-danger displaySms'>
						<h4>ERROR !</h4>
						<p>Sorry something went wrong, try again.</p>
					</div>";
				}else if($success[2] == 'empty'){
					echo "<div class='callout callout-danger displaySms'>
						<h4>ERROR !</h4>
						<p>Please Fill the Field.</p>
					</div>";
				}else if($success[3] == 'invalid'){
					echo "<div class='callout callout-danger displaySms'>
						<h4>ERROR !</h4>
						<p>Please make sure venue title contains capital letters, numbers and no space between them, for example: B12.</p>
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
							  <option>Information Technology</option>
							  <option>Electronics and Communication</option>
							  <option>Civil Engineering</option>
							  <option>Computer Engineering</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label></label><br>
							<button type="submit" name="sv_time_od" class="btn btn-primary">Create</button>
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