<?php 
	include('header/head.php');
	include('header/asideMenuLecturer.php');
?>
  <aside class="main-sidebar">
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <li><a href="lecturer.php"><i class="fa fa-files-o"></i> <span>Student Marks</span> </a></li>
		<!--end of student marks-->
		<li class="active"><a href="lecturerProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>My Profile<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="lecturer.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile Settings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-body box-profile">
					  <img class="profile-user-img img-responsive img-circle" src="dist/img/user_kijo.png" alt="User profile picture">

					  <h3 class="profile-username text-center">Manase Kijo</h3>
					  <p class="text-muted text-center">Lecturer</p>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Phone Number:</b> <a class="pull-right">+255-712-076666</a>
						</li>
						<li class="list-group-item">
						  <b>E-mail:</b> <a class="pull-right">manasekijo@gmail.com</a>
						</li>
						<li class="list-group-item">
						  <b>Nationality:</b> <a class="pull-right">Tanzanian</a>
						</li>
						<li class="list-group-item">
						  <b>Username:</b> <a class="pull-right">manase2002</a>
						</li>
					  </ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-9">
				<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#p_info" data-toggle="tab">Personal Information</a></li>
						</ul>
					<div class="tab-content box-height-tab">
						 <div class="active tab-pane" id="p_info">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<label class="col-sm-2 control-label">E-mail:</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Phone No:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Username:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
								  <input type="password" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Retype Password</label>
								<div class="col-sm-10">
								  <input type="password" class="form-control">
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-primary">Save Changes</button>
								</div>
							  </div>
							</form>
						  </div>
						  <!-- /.tab-pane --> 
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