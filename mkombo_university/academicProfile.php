<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuAcademicOfficer.php');
	include('data/profileData.php');
	
	if(logged_in()){
		
	}else{
		header('Location: staffLogin.php');
	}
	
	if(isset($_GET['response'])){
		if($_GET['response'] == 'success'){
			$success = "The changes have been successful saved.";
		}else if($_GET['response'] == 'fail'){
			$fail = "Sorry something went wrong, try to save again.";
		}
	}
?>
<aside class="main-sidebar">

    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
		<li>
          <a href="academicOfficer.php?user=academic_officer"><i class="fa fa-book"></i> <span>Module Assignment</span></a>
        </li>
		<li class="active"><a href="academicProfile.php?user=academic_officer"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
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
        <li><a href="academicOfficer.php?user=academic_officer"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Profile Settings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
			if(isset($success)){
					echo "<div class='callout callout-success displaySms'>
							<h4>Successfully !</h4>
							<p>".$success."</p>
						</div>";
			}
			if(isset($fail)){
				echo "<div class='callout callout-danger displaySms'>
						<h4>ERROR !</h4>
						<p>".$fail."</p>
					</div>";
			}
			?>
		</div>
		<div class="col-md-3"></div>
	</div>
		<div class="row">
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-body box-profile">
					  <img class="profile-user-img img-responsive img-circle" src="dist/img/user_kijo.png" alt="User profile picture">

					  <h3 class="profile-username text-center"><?php echo getField('fname')." ".getField('sname');?></h3>
					  <p class="text-muted text-center">Academic Officer</p>

					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
						  <b>Phone Number:</b> <a class="pull-right"><?php echo getField('phone_no');?></a>
						</li>
						<li class="list-group-item">
						  <b>E-mail:</b> <a class="pull-right"><?php echo getField('email_address');?></a>
						</li>
						<li class="list-group-item">
						  <b>Nationality:</b> <a class="pull-right"><?php echo getField('nationality');?></a>
						</li>
						<li class="list-group-item">
						  <b>Username:</b> <a class="pull-right"><?php echo getField('username');?></a>
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
								<div class="col-sm-10 aemail-err">
								  <input type="email" name="ainputEmail" class="form-control ainputEmail" value="<?php echo getField('email_address');?>">
								  <span class="help-block aemail-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Phone No:</label>
								<div class="col-sm-10 aphone-err">
								  <input type="text" name="ainputPhone" class="form-control ainputPhone" value="<?php echo getField('phone_no');?>">
								  <span class="help-block aphone-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Username:</label>
								<div class="col-sm-10 ausername-err">
								  <input type="text" name="ainputUsername" class="form-control ainputUsername" value="<?php echo getField('username');?>">
								  <span class="help-block ausername-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10 apass-err">
								  <input type="password" name="ainputPassword" class="form-control ainputPassword">
								  <span class="help-block apass-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label">Retype Password</label>
								<div class="col-sm-10 arepass-err">
								  <input type="password" class="form-control ainputRepassword">
								  <span class="help-block arepass-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" name="sv_aca" class="btn btn-primary sv_adm">Save Changes</button>
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
  </div>

<?php 
	include('footer/footer.php');
	include('footer/help.php');
	include('footer/js.php');
?>