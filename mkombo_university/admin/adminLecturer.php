<?php
	include('../config/config.php');
	include('../config/functions.php');
	include('header/head.php');
	include('header/asideMenuAdmin.php');
	include('data/lecturerMgtData.php');
	
	if(logged_in()){
		
	}else{
		header('Location: adminLogin.php');
	}
	
?>
<aside class="main-sidebar">

    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
		<li class="treeview">
			<a href="#"><i class="fa fa-book"></i> <span>Student Management</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="admin.php"><i class="fa fa-file-o"></i> <span>Bachelor Degree</span></a></li>
				<li><a href="adminStudentDiploma.php"><i class="fa fa-file-o"></i> <span>Ordinary Diploma</span></a></li>
			</ul>
		</li>
		<li class="active"><a href="adminLecturer.php"><i class="fa fa-book"></i> <span>Lecturer Management</span></a></li>
		<li><a href="adminStaff.php"><i class="fa fa-book"></i> <span>Staff Management</span></a></li>
		<li><a href="adminProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Lecturer Management<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lecturer Management</li>
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
								<p>".$success[0]." Successful Inserted.</p>
							</div>";
					}
					if($success[2] == 'fail'){
						echo "<div class='callout callout-danger displaySms'>
								<h4>ERROR !</h4>
								<p>".$success[0]." failed. Sorry something went wrong, try to insert again.</p>
							</div>";
					}
					if($success[3] == 'empty'){
						echo "<div class='callout callout-danger displaySms'>
								<h4>ERROR !</h4>
								<p>Please Fill the field.</p>
							</div>";
					}
					if($success[4] == 'invalid'){
						echo "<div class='callout callout-danger displaySms'>
								<h4>ERROR !</h4>
								<p>Letters Only and No space.</p>
							</div>";
					}
					if($success[5] == 'duplicate'){
						echo "<div class='callout callout-danger displaySms'>
								<h4>ERROR !</h4>
								<p><b>".$success[6]." ".$success[7]." ".$success[8]."</b> already registered.</p>
							</div>";
					}
				}
				?>
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row">
			
			<div class="col-md-12">
				<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#p_info" data-toggle="tab">Entries</a></li>
						  <li><a href="#m_info" data-toggle="tab">Edit</a></li>
						</ul>
					<div class="tab-content box-height-tab">
						 <div class="active tab-pane" id="p_info">
							<form method="post" enctype="multipart/form-data">
								<div class="row" style="margin:2% auto;">
									<div class="col-md-3">
										<div class="form-group">
											<label>Programme:</label><br>
											<select name="programme" class="form-control select2"> 
											  <option selected="selected" value="">Select a Programme</option>
											  <option>Bachelor Degree</option>
											  <option>Ordinary Diploma</option>
							
											</select>
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group course">
											<label>Department:</label>
											<select name="department" class="form-control select2">
											  <option selected="selected" value="">Select a Department</option>
											  <option>Information Technology</option>
											  <option>Electronics And Communication</option>
											  <option>Civil Engineering</option>
											  <option>Computer Engineering</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row" style="margin:2% auto;">
									<div class="col-md-3">
										<div class="form-group fname">
											<label>First Name:</label>
											  <input type="text" class="form-control" name="fname[]"><br>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group mname">
											<label>Middle Name:</label>
											  <input type="text" class="form-control" name="mname[]"><br>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group sname">
											<label>Surname:</label>
											  <input type="text" class="form-control" name="sname[]"><br>
										</div>
									</div>
									<div class="col-md-1">
										<div class="form-group hod">
											<label>HOD:</label><br>
											<div class="form-group" style="margin-bottom:46%;">
												<select name="hod[]" style="padding:7%;">
												  <option>NO</option>
												  <option>YES</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label></label><br>
											<a class="btn btn-primary addBtnLecturer">Add another</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-3">
										<div class="form-group">
											<label></label><br>
											<button type="submit" name="sv_lecturer" class="btn btn-primary">Save</button>
										</div>
									</div>
								</div>
							</form>
						  </div>
						  <!-- /.tab-pane --> 
						  <div class="tab-pane" id="m_info">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
							  
							</form>
						  </div>
						  <!-- /.tab-pane --> 
					</div>
				</div>
			</div>
		</div>

    </section>
  </div>

<?php 
	include('footer/footer.php');
	include('footer/help.php');
	include('footer/js.php');
?>