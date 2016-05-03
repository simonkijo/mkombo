<?php 
	include('header/studentStaffLoginHeader.php');
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Mkombo</b> University</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
		<div class="form-group has-feedback username-err"><!--for error-->
			<input type="text" class="form-control username" placeholder="Username">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block username-err-sms"></span>
		</div>
      </div>
      <div class="form-group has-feedback">
		<div class="form-group has-feedback password-err"><!--for error-->
			<input type="password" class="form-control password" placeholder="Password">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			<span class="help-block password-err-sms"></span>
		</div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block log-in-staff">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>
    <a href="staffRegistration.php" class="text-center">New Staff</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php 
	include('footer/studentStaffLoginFooter.php');
?>
