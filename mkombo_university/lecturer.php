<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuLecturer.php');
	include('data/checkModuleLecturer.php');
	include('data/loadStudent.php');
	include('data/studentMarks.php');
	
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
        <li class="active"><a href="lecturer.php"><i class="fa fa-files-o"></i> <span>Student Marks</span> </a></li>
<?php 
	$hod = getRoleField('hod');
	if(isset($hod) && !empty($hod)){
		if($hod == 'YES'){
			echo '<li><a href="moduleAssignment.php"><i class="fa fa-book"></i> <span>Module Assignment</span> </a></li>';
		}
	}
?>
		<li><a href="classAllocation.php"><i class="fa fa-calendar"></i> <span>Class Allocation</span></a></li>
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
      <h1>Student Marks<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="lecturer.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Marks</li>
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
								<p> Successful Saved.</p>
							</div>";
					}
					if($success[2] == 'fail'){
						echo "<div class='callout callout-danger displaySms'>
								<h4>ERROR !</h4>
								<p> Sorry something went wrong, try to insert again.</p>
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
								<p>Numbers Only.</p>
							</div>";
					}
					if($success[5] == 'inserted'){
						echo "<div class='callout callout-info displaySms'>
								<h4>INFORMATION !</h4>
								<p>Student Marks for CA and FE already entered, if you want to edit contact examination officer.</p>
							</div>";
					}
					if($success[6] == 'no_module'){
						echo "<div class='callout callout-info displaySms'>
								<h4>INFORMATION !</h4>
								<p>You are not assigned a module yet, please contact your Head of department.</p>
							</div>";
					}
					if($success[7] == 'hod'){
						echo "<div class='callout callout-info displaySms'>
								<h4>INFORMATION !</h4>
								<p>Please assign module to yourself and other lecturer in your department.</p>
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
				<div class="col-md-3"></div>
<?php
	if(isset($modules) && !empty($modules)){
		if(count(printJSONDATA($modules)) > 1){
		echo	'<div class="col-md-3">
					<div class="form-group">
						<label>Module Title:</label><br>
						<select name="module_title" class="form-control select2">
						  <option selected="selected" value="">Select a module title</option>';
?>
<?php
				foreach(printJSONDATA($modules) as $dt){
					echo  '<option>'.$dt.'</option>';
				}
?>
<?php						  
						  
				echo	'</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="sv_choose" class="btn btn-primary">Show</button>
					</div>
				</div>';
		}
	}
?>				
			</div>
			<div class="row">
				<div class="col-md-12">
<?php
		if(isset($_POST['sv_choose']) || isset($reg_no)){
			echo	'<div class="box-body">
						<table id="StudentMarks" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Reg No</th>
								  <th>Name</th>
								  <th>Continuous Assessment (%)</th>
								  <th>Final Examination (%)</th>
								</tr>
							</thead>
							<tbody>';
?>
<?php	
			for($i=0;$i<count($reg_no);$i++){
						echo	'<tr>
								  <td>'.$reg_no[$i].'</td>
								  <td>'.$fname[$i].' '.$mname[$i].' '.$sname[$i].'</td>
								  <td>
										<div class="form-group">
											<div class="col-sm-10">
											  <input type="text" name="ca[]" class="form-control ca_marks">
											</div>
										 </div>
								  </td>
								  <td>
										<div class="form-group">
											<div class="col-sm-10">
											  <input type="text" name="fe[]" class="form-control fe_marks">
											</div>
										 </div>
								  </td>
								</tr>';
			}
?>
<?php								
					echo	'</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="sv_marks" class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>';
		}	
?>			
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