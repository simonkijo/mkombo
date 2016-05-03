<?php 
	include('header/head.php');
	include('header/asideMenuStudent.php');
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="student.php"><i class="fa fa-table"></i> <span>Class Time Table</span> </a></li>
        <li><a href="studentSubjectsCat.php"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> </a></li>
		<!--end of subjects catalog-->
		<li><a href="studentAcademicReport.php"><i class="fa fa-files-o"></i> <span>Academic Reports</span> </a></li>
		<!--end of academic report-->
		<li class="active"><a href="studentProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
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
        <li><a href="student.php"><i class="fa fa-dashboard"></i> Home</a></li>
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

					  <h3 class="profile-username text-center">Simon Kijo</h3>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Marital Status:</b> <a class="pull-right">Single</a>
						</li>
						<li class="list-group-item">
						  <b>Phone Number:</b> <a class="pull-right">+255-712-076666</a>
						</li>
						<li class="list-group-item">
						  <b>E-mail:</b> <a class="pull-right">simonkijo@gmail.com</a>
						</li>
						<li class="list-group-item">
						  <b>Nationality:</b> <a class="pull-right">Tanzanian</a>
						</li>
						<li class="list-group-item">
						  <b>Birth Date:</b> <a class="pull-right">12/07/1990</a>
						</li>
					  </ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#p_info" data-toggle="tab">Personal Information</a></li>
						  <li><a href="#bank_info" data-toggle="tab">Bank Information</a></li>
						  <li><a href="#sponsor_info" data-toggle="tab">Sponsor Information</a></li>
						</ul>
					<div class="tab-content box-height-tab">
						 <div class="active tab-pane" id="p_info">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="inputEmail" class="col-sm-2 control-label">E-mail:</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" id="inputEmail">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputPhone" class="col-sm-2 control-label">Phone No:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputPhone">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputMarital" class="col-sm-2 control-label">Marital Status:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputMarital">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputHome" class="col-sm-2 control-label">Home Place:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputHome">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
								  <input type="password" class="form-control" id="inputPassword">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputRepassword" class="col-sm-2 control-label">Retype Password</label>
								<div class="col-sm-10">
								  <input type="password" class="form-control" id="inputRepassword">
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
						  <div class="tab-pane" id="bank_info">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="inputBankName" class="col-sm-2 control-label">Bank Name:</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" id="inputBankName">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputBankBranch" class="col-sm-2 control-label">Bank Branch:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputBankBranch">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputAccountNo" class="col-sm-2 control-label">Account No:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputAccountNo">
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
						  <div class="tab-pane" id="sponsor_info">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="inputSponsorName" class="col-sm-2 control-label">Sponsor Name:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputSponsorName">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputSponsorPhone" class="col-sm-2 control-label">Phone No:</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputSponsorPhone">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputSponsorEmail" class="col-sm-2 control-label">E-mail:</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" id="inputSponsorEmail">
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
		
		<div class="row">
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-body box-profile">
					  <h3 class="profile-username text-center">Parent Information</h3>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Name:</b> <a class="pull-right">Gabriel Gabriel</a>
						</li>
						<li class="list-group-item">
						  <b>Phone Number:</b> <a class="pull-right">+255-712-076666</a>
						</li>
						<li class="list-group-item">
						  <b>E-mail:</b> <a class="pull-right">simonkijo@gmail.com</a>
						</li>
						<li class="list-group-item">
						  <b>Home Place:</b> <a class="pull-right">Mbezi</a>
						</li>
					  </ul>
					  
					  <h3 class="profile-username text-center">Bank Information</h3>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Bank Name:</b> <a class="pull-right">CRDB</a>
						</li>
						<li class="list-group-item">
						  <b>Bank Branch:</b> <a class="pull-right">Mlimani City</a>
						</li>
						<li class="list-group-item">
						  <b>Account No:</b> <a class="pull-right">1236736183613118</a>
						</li>
					  </ul>
					  
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-body box-profile">
					  <h3 class="profile-username text-center">Health Insurance Information</h3>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Membership No:</b> <a class="pull-right">05-12346789</a>
						</li>
						<li class="list-group-item">
						  <b>Vote:</b> <a class="pull-right">666</a>
						</li>
						<li class="list-group-item">
						  <b>P.O.Box:</b> <a class="pull-right">1234,Dar es salaam,Tz</a>
						</li>
						<li class="list-group-item">
						  <b>Issue Date:</b> <a class="pull-right">13/08/2012</a>
						</li>
					  </ul>
					  
					  <h3 class="profile-username text-center">Sponsor Information</h3>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Name:</b> <a class="pull-right">Wilson Manase</a>
						</li>
						<li class="list-group-item">
						  <b>Phone Number:</b> <a class="pull-right">+255-712-076666</a>
						</li>
						<li class="list-group-item">
						  <b>E-mail:</b> <a class="pull-right">wilsonmanase@gmail.com</a>
						</li>
					  </ul>
					  
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-body box-profile">
					  <h3 class="profile-username text-center">Background Education Information</h3>
						<h5 class="profile-username text-center">Secondary Education</h5>
					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Index No:</b> <a class="pull-right">S0938/0205/2009</a>
						</li>
						<li class="list-group-item">
						  <b>School Name:</b> <a class="pull-right">Mbezi Beach</a>
						</li>
						<li class="list-group-item">
						  <b>School Location:</b> <a class="pull-right">Mbezi</a>
						</li>
						<li class="list-group-item">
						  <b>Certificate Award:</b> <a class="pull-right">CSEE</a>
						</li>
						<li class="list-group-item">
						  <b>Completion Year:</b> <a class="pull-right">2009</a>
						</li>
						<li class="list-group-item">
						  <b>Subjects Taken:</b> <p><a class="pull-right">Physics,Chemistry,Biology,Civics,Kiswahili,English,History,Geography,Mathematics</a></p>
						</li>
					  </ul>
					  
					  <h5 class="profile-username text-center">Advance Secondary Education</h5>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Index No:</b> <a class="pull-right">S0938/0205/2012</a>
						</li>
						<li class="list-group-item">
						  <b>School Name:</b> <a class="pull-right">Kisimiri</a>
						</li>
						<li class="list-group-item">
						  <b>School Location:</b> <a class="pull-right">Arusha</a>
						</li>
						<li class="list-group-item">
						  <b>Certificate Award:</b> <a class="pull-right">ACSEE</a>
						</li>
						<li class="list-group-item">
						  <b>Completion Year:</b> <a class="pull-right">2012</a>
						</li>
						<li class="list-group-item">
						  <b>Subjects Combination:</b> <a class="pull-right">PCM</a>
						</li>
					  </ul>
					  
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