<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuLecturer.php');
	include('data/lecturerDayData.php');
	
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
        <li><a href="lecturer.php"><i class="fa fa-files-o"></i> <span>Student Marks</span> </a></li>
<?php 
	$hod = getRoleField('hod');
	if(isset($hod) && !empty($hod)){
		if($hod == 'YES'){
			echo '<li><a href="moduleAssignment.php"><i class="fa fa-book"></i> <span>Module Assignment</span> </a></li>';
		}
	}
?>
		<li class="active"><a href="classAllocation.php"><i class="fa fa-calendar"></i> <span>Class Allocation</span></a></li>
		<li><a href="lecturerProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Class Allocation<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="lecturer.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Class Allocation</li>
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
								<p> Successful Submitted.</p>
							</div>";
					}
					if($success[2] == 'fail'){
						echo "<div class='callout callout-danger displaySms'>
								<h4>ERROR !</h4>
								<p> Sorry something went wrong, try to insert again.</p>
							</div>";
					}
					if($success[3] == 'yes'){
						echo "<div class='callout callout-info displaySms'>
								<h4>Alert !</h4>
								<p>Wait for next academic year. Time table master will allow you to update days.</p>
							</div>";
					}
				}
				?>
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<div class="row" style="margin-left:10%; margin-top:2%;">
				<div class="col-md-6">
					<div class="callout callout-info">
						<h4>Hint</h4>
						<p>Set days ,You are available for class teaching. Time Table Master will use for class allocation.</p>
					</div>
				</div>
			</div>
			<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="form-group">
					<label>Days</label><br>
					<select name="day[]" class="form-control select2" multiple="multiple" data-placeholder="Select a day">
					  <option>Monday</option>
					  <option>Tuesday</option>
					  <option>Wednesday</option>
					  <option>Thursday</option>
					  <option>Friday</option>
					</select>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="day_s" class="btn btn-primary">Submit</button>
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