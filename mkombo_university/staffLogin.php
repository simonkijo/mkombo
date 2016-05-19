<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/studentStaffLoginHeader.php');
	error_reporting("E_NOTICE");
	if($_GET['response'] == 'success'){
		$response = "The Information is successful submitted. You can Login now.";
	}
	
	if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['title'])){
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$title = $_POST['title'];
		$hash_pass = hashPassword($pass);
		
		if(!empty($username) && !empty($pass) && !empty($title)){
			$query = "SELECT `username` FROM `mkombo_university`.`$title` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($hash_pass)."'";
			$query_run = mysql_query($query);
			$num_row = mysql_num_rows($query_run);
			if($num_row == 0){
				$err_sms = "Invalid Username or Password";
			}else if($num_row == 1){
				$usern = mysql_result($query_run,0,'username');
				$_SESSION['username'] = $usern;
				if($title == "lecturer"){
					header('Location:lecturer.php?user=lecturer');
				}else if($title == "admission_officer"){
					header('Location:admissionOfficer.php?user=admission_officer');
				}else if($title == "examination_officer"){
					header('Location:examinationOfficer.php?user=examination_officer&class=computer');
				}else if($title == "time_table_master"){
					header('Location:timeTableMaster.php?user=time_table_master');
				}else if($title == "academic_officer"){
					header('Location:academicOfficer.php?user=academic_officer');
				}
			}
		}
	}
?>
<body class="hold-transition login-page">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<?php 
		if(!isset($err_sms)){
			if(isset($response)){
				echo "<div class='callout callout-success displaySms'>
						<h4>Successfully !</h4>
						<p>".$response."</p>
					</div>";
			}
		}
		if(isset($err_sms)){
			echo "<div class='callout callout-danger errSms'>
					<h4>ERROR !</h4>
					<p>".$err_sms."</p>
				</div>";
		}?>
	</div>
	<div class="col-md-3"></div>
</div>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Mkombo</b> University</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
		<div class="form-group has-feedback username-err"><!--for error-->
			<input type="text" name="username" class="form-control username" placeholder="Username">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block username-err-sms"></span>
		</div>
      </div>
      <div class="form-group has-feedback">
		<div class="form-group has-feedback password-err"><!--for error-->
			<input type="password" name="pass" class="form-control password" placeholder="Password">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			<span class="help-block password-err-sms"></span>
		</div>
      </div>
	  <div class="form-group">
		<label>Login As</label><br>
		<select name="title" class="form-control select2">
		  <option value="lecturer">Lecturer</option>
		  <option value="examination_officer">Examination Officer</option>
		  <option value="time_table_master">Time table master</option>
		  <option value="admission_officer">Admission Officer</option>
		  <option value="academic_officer">Academic Officer</option>
		</select>
	  </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block log-in-staff">Sign In</button>
        </div>
      </div>
    </form>

    <a href="#">I forgot my password</a><br>
    <a href="staffRegistration.php" class="text-center">New Staff</a>

  </div>
</div>

<?php 
	include('footer/studentStaffLoginFooter.php');
?>
