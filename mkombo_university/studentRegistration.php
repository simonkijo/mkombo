<?php 
	include('config/config.php');
	include('config/functions.php');
	include('data/studentRegData.php');
	error_reporting("E_NOTICE");
	if($_GET['response'] == 'fail'){
		$response = "Sorry ,something went wrong. Please try again.";
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MU | Student Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/mkombo.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition register-page">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<?php 
		if(isset($response)){
			echo "<div class='callout callout-danger displaySms'>
					<h4>Error !</h4>
					<p>".$response."</p>
				</div>";
		}?>
	</div>
	<div class="col-md-3"></div>
</div>
<div class="register-box-student">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Registration
      </h1>
    </section>
	
	<!-- Main content -->
    <section class="content">

      <!-- START CUSTOM TABS -->
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active" id="tab-1"><a href="#" data-toggle="tab">Step 1</a></li>
              <li id="tab-2"></li>
            </ul>
            <div class="tab-content" >
				
              <div class="tab-pane active" id="tab_1">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-5">
				
							<div class="box-header with-border small-box bg-aqua">
								<h3 class="box-title">Personal Information</h3>
							</div>
							<!-- /.box-header -->
						<form action="" method="post" enctype="multipart/form-data">
							  <div class="form-group has-feedback">
								<label>First Name:</label>
								<div class="form-group has-feedback st-fn-err"><!--for error-->
									<input type="text" class="form-control st-fname" name="fname">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<span class="help-block st-fn-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group has-feedback">
								<label>Middle Name:</label>
								<div class="form-group has-feedback st-mn-err"><!--for error-->
									<input type="text" class="form-control st-mname" name="mname">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<span class="help-block st-mn-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group has-feedback">
								<label>Surname:</label>
								<div class="form-group has-feedback st-sn-err"><!--for error-->
									<input type="text" class="form-control st-sname" name="sname">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<span class="help-block st-sn-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label>
								  <input type="radio" name="gender" value="Male" class="minimal" checked>
								  Male
								</label>
								<label>
								  <input type="radio" name="gender" value="Female" class="minimal">
								  Female
								</label>
							  </div>
							  <div class="form-group">
								<label>Marital Status:</label><br>
								<select name="marital_status" class="form-control select2">
								  <option selected="selected">Single</option>
								  <option>Married</option>
								</select>
							  </div>
							  <div class="form-group">
								<label>Phone number:</label>
								<div class="input-group st-phone-no-err">
								  <div class="input-group-addon">
									<i class="fa fa-phone"></i>
								  </div>
								  <input type="text" name="phone_no" class="form-control st-phone-no" data-inputmask="'mask': ['+999-999-999999']" data-mask>
								</div>
								<span class="help-block st-phone-no-err-sms err"></span>
							  </div>
							  <div class="form-group has-feedback">
								<label>E-mail:</label>
								<div class="form-group has-feedback st-email-err"><!--for error-->
									<input type="email" class="form-control st-email" name="email_address">
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									<span class="help-block st-email-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group has-feedback">
								<label>Nationality:</label>
								<div class="form-group has-feedback st-nationality-err"><!--for error-->
									<input type="text" class="form-control st-nationality" name="nationality">
									<span class="glyphicon glyphicon-flag form-control-feedback"></span>
									<span class="help-block st-nationality-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label>Birth Date:</label>
								<div class="input-group st-birth-err">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" name="birth_date" class="form-control st-birth" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
								</div>
								<span class="help-block st-birth-err-sms err"></span>
							  </div>
							  <div class="form-group has-feedback">
								<label>Birth Country:</label>
								<div class="form-group has-feedback st-country-err"><!--for error-->
									<input type="text" class="form-control st-country" name="birth_country">
									<span class="glyphicon glyphicon-flag form-control-feedback"></span>
									<span class="help-block st-country-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label>Home Place:</label>
								<div class="input-group st-home-err">
								  <div class="input-group-addon">
									<i class="fa fa-map"></i>
								  </div>
								  <input type="text" name="home_place" class="form-control st-home">
								</div>
								<span class="help-block st-home-err-sms err"></span>
							  </div>
							  <div class="form-group has-feedback">
								<label>Password:</label>
								<div class="form-group has-feedback st-password-err"><!--for error-->
									<input type="password" name="password" class="form-control st-password">
									<span class="glyphicon glyphicon-lock form-control-feedback"></span>
									<span class="help-block st-password-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group has-feedback">
								<label>Retype password:</label>
								<div class="form-group has-feedback st-repassword-err"><!--for error-->
									<input type="password" name="repassword" class="form-control st-repassword">
									<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
									<span class="help-block st-repassword-err-sms"></span>
								</div>
							  </div>
							  <!--end of personal info -->
							</div>
							
							<div class="col-md-5">
							
								<div class="box-header with-border small-box bg-aqua">
									<h3 class="box-title">Parent Information</h3>
								</div>
							  <div class="form-group has-feedback">
								<label>Full Name:</label>
								<div class="form-group has-feedback st-fullname-err"><!--for error-->
									<input type="text" class="form-control st-fullname" name="fullname">
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
									<span class="help-block st-fullname-err-sms"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label>Phone number:</label>
								<div class="input-group st-phone-no-err-p">
								  <div class="input-group-addon">
									<i class="fa fa-phone"></i>
								  </div>
								  <input type="text" name="phone_no_p" class="form-control st-phone-no-p" data-inputmask="'mask': ['+999-999-999999']" data-mask>
								</div>
								<span class="help-block st-phone-no-err-sms-p err"></span>
							  </div>
							  <div class="form-group has-feedback">
								<label>E-mail:</label>
								<div class="form-group has-feedback st-email-err-p"><!--for error-->
									<input type="email" class="form-control st-email-p" name="email_p">
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
									<span class="help-block st-email-err-sms-p"></span>
								</div>
							  </div>
							  <div class="form-group">
								<label>Home Location:</label>
								<div class="input-group st-home-err-p">
								  <div class="input-group-addon">
									<i class="fa fa-map"></i>
								  </div>
								  <input type="text" name="physical_location" class="form-control st-home-p">
								</div>
								<span class="help-block st-home-err-sms-p err"></span>
							  </div>
							  <!--end of parent info -->
							  
								<div class="box-header with-border small-box bg-aqua">
									<h3 class="box-title">Bank Information</h3>
								</div>
								<div class="form-group">
									<label>Bank Name:</label>
									<div class="input-group st-bankname-err">
									  <div class="input-group-addon">
										<i class="fa fa-bank"></i>
									  </div>
									  <input type="text" name="bank_name" class="form-control st-bankname">
									</div>
									<span class="help-block st-bankname-err-sms err"></span>
								</div>
								<div class="form-group">
									<label>Bank Branch:</label>
									<div class="input-group st-bankbranch-err">
									  <div class="input-group-addon">
										<i class="fa fa-code-fork"></i>
									  </div>
									  <input type="text" name="bank_branch" class="form-control st-bankbranch">
									</div>
									<span class="help-block st-bankbranch-err-sms err"></span>
								</div>
								<div class="form-group">
									<label>Account Number:</label>
									<div class="input-group st-account-no-err">
									  <div class="input-group-addon">
										<i class="fa fa-credit-card"></i>
									  </div>
									  <input type="text" name="account_no" class="form-control st-account-no">
									</div>
									<span class="help-block st-account-no-err-sms err"></span>
								</div>
								<!--end of bank info-->
							</div>
							
						</div>
						<a id="step_tab_1" class="btn btn-primary" style="margin:1% 50%;">NEXT</a>
						
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="box-header with-border small-box bg-aqua">
									<h3 class="box-title">Background Education Information</h3>
								</div>
								<div class="box-header with-border">
									<h5 class="box-title">Secondary Education</h5>
								</div>
							  
							  <div class="form-group">
								<label>Index number:</label>
								<div class="input-group st-index-no-err">
								  <div class="input-group-addon">
									<i class="fa fa-fax"></i>
								  </div>
								  <input type="text" name="index_no_olevel" class="form-control st-index-no" data-inputmask="'mask': ['[S]9999/9999/9999','[P]9999/9999/9999']" data-mask>
								</div>
								<span class="help-block st-index-no-err-sms err"></span>
							  </div>
							  <div class="form-group">
								<label>School Name:</label>
								<div class="input-group st-schoolname-err">
								  <div class="input-group-addon">
									<i class="fa fa-institution"></i>
								  </div>
								  <input type="text" name="school_name_olevel" class="form-control st-schoolname">
								</div>
								<span class="help-block st-schoolname-err-sms err"></span>
							  </div>
							  <div class="form-group">
								<label>School Location:</label>
								<div class="input-group st-schoollocation-err">
								  <div class="input-group-addon">
									<i class="fa fa-map"></i>
								  </div>
								  <input type="text" name="sc_location_olevel" class="form-control st-schoollocation">
								</div>
								<span class="help-block st-schoollocation-err-sms err"></span>
							  </div>
							  <div class="form-group">
								<label>Certificate Awarded:</label>
								<div class="input-group st-cert-err">
								  <div class="input-group-addon">
									<i class="fa fa-certificate"></i>
								  </div>
								  <input type="text" name="cert_olevel" class="form-control st-cert" placeholder="eg, certificate of secondary education exams">
								</div>
								<span class="help-block st-cert-err-sms err"></span>
							  </div>
							  <div class="form-group">
								<label>Completion Year:</label>
								<div class="input-group st-completionyr-err">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" name="completion_yr_olevel" class="form-control st-completionyr" data-inputmask="'mask': ['9999']" data-mask>
								</div>
								<span class="help-block st-completionyr-err-sms err"></span>
							  </div>
							  <div class="form-group">
								<label>Subjects Taken</label><br>
								<select name="subject_taken[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Subject" style="width:100%;">
								  <option>Physics</option>
								  <option>Chemistry</option>
								  <option>Biology</option>
								  <option>Civics</option>
								  <option>History</option>
								  <option>Kiswahili</option>
								  <option>Geography</option>
								  <option>Mathematics</option>
								  <option>English</option>
								</select>
							  </div>
							  <!--end of sec education info-->
							  
								<div class="box-header with-border">
									<h5 class="box-title">Advance Secondary Education</h5>
								</div>
							  
							  <div class="form-group">
								<label>Index number:</label>
								<div class="input-group st-index-no-err-a">
								  <div class="input-group-addon">
									<i class="fa fa-fax"></i>
								  </div>
								  <input type="text" name="index_no_alevel" class="form-control st-indexno-a" data-inputmask="'mask': ['[S]9999/9999/9999','[P]9999/9999/9999']" data-mask>
								</div>
								<span class="help-block st-index-no-err-sms-a err"></span>
							  </div>
							  <div class="form-group">
								<label>School Name:</label>
								<div class="input-group st-schoolname-err-a">
								  <div class="input-group-addon">
									<i class="fa fa-institution"></i>
								  </div>
								  <input type="text" name="school_name_alevel" class="form-control st-schoolname-a">
								</div>
								<span class="help-block st-schoolname-err-sms-a err"></span>
							  </div>
							  <div class="form-group">
								<label>School Location:</label>
								<div class="input-group st-schoollocation-err-a">
								  <div class="input-group-addon">
									<i class="fa fa-map"></i>
								  </div>
								  <input type="text" name="sc_location_alevel" class="form-control st-schoolloc-a">
								</div>
								<span class="help-block st-schoollocation-err-sms-a err"></span>
							  </div>
							  <div class="form-group">
								<label>Certificate Awarded:</label>
								<div class="input-group st-cert-err-a">
								  <div class="input-group-addon">
									<i class="fa fa-certificate"></i>
								  </div>
								  <input type="text" name="cert_alevel" class="form-control st-cert-a" placeholder="eg, advanced certificate of secondary education exams">
								</div>
								<span class="help-block st-cert-err-sms-a err"></span>
							  </div>
							  <div class="form-group">
								<label>Completion Year:</label>
								<div class="input-group st-completionyr-err-a">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" name="completion_yr_alevel" class="form-control st-completionyr-a" data-inputmask="'mask': ['9999']" data-mask>
								</div>
								<span class="help-block st-completionyr-err-sms-a err"></span>
							  </div>
							  <div class="form-group">
								<label>Subjects Combination:</label><br>
								<select name="subject_combination" class="form-control select2" data-placeholder="Select a Combination" style="width:100%;">
								  <option>PCM</option>
								  <option>PCB</option>
								  <option>PGM</option>
								  <option>EGM</option>
								</select>
							  </div>
							  <!--end of advanced sec education-->
							</div>
							
							<div class="col-md-5">
								<div class="box-header with-border small-box bg-aqua">
									<h3 class="box-title">Health Insurance Information</h3>
								</div>
								
								<div class="form-group">
									<label>Membership number:</label>
									<div class="input-group m-no-err">
									  <div class="input-group-addon">
										<i class="fa fa-fax"></i>
									  </div>
									  <input type="text" name="membership_no" class="form-control m-no" data-inputmask="'mask': ['99-99999999']" data-mask>
									</div>
									<span class="help-block m-no-err-sms err"></span>
								</div>
								<div class="form-group">
									<label>Vote:</label>
									<div class="input-group v-no-err">
									  <div class="input-group-addon">
										<i class="fa fa-file-o"></i>
									  </div>
									  <input type="text" name="vote" class="form-control v-no">
									</div>
									<span class="help-block v-no-err-sms err"></span>
								</div>
								<div class="form-group has-feedback">
									<label>P.O.Box:</label>
									<div class="form-group has-feedback box-p-err">
										<input type="text" class="form-control box-p" name="address" placeholder="eg, 11360, Dar-es-salaam,Tanzania">
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
										<span class="help-block box-p-err-sms"></span>
									</div>
								</div>
								<div class="form-group">
									<label>Issue Date:</label>
									<div class="input-group issue-d-err">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="text" name="issue_date" class="form-control issue-d" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
									<span class="help-block issue-d-err-sms err"></span>
								</div>
								<!--end of health insurance info-->
								
								<div class="box-header with-border small-box bg-aqua">
									<h3 class="box-title">Sponsor Information</h3>
								</div>
								<div class="form-group">
									<label>Sponsor Name:</label>
									<div class="input-group sponsorn-err">
									  <div class="input-group-addon">
										<i class="fa fa-user"></i>
									  </div>
									  <input type="text" name="sponsor_name" placeholder="eg, HESLB or person name" class="form-control sponsorn">
									</div>
									<span class="help-block sponsorn-err-sms err"></span>
								</div>
								<div class="form-group">
									<label>Phone number:</label>
									<div class="input-group sponsor-no-err">
									  <div class="input-group-addon">
										<i class="fa fa-phone"></i>
									  </div>
									  <input type="text" name="sponsor_phone" class="form-control sponsor-no" data-inputmask="'mask': ['+999-999-999999']" data-mask>
									</div>
									<span class="help-block sponsor-no-err-sms err"></span>
								</div>
								<div class="form-group has-feedback">
									<label>E-mail:</label>
									<div class="form-group has-feedback sponsor-email-err">
										<input type="email" class="form-control sponsor-email" name="sponsor_email">
										<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
										<span class="help-block sponsor-email-err-sms"></span>
									</div>
								</div>
							</div>
						</div>
					
						<div class="row" style="margin:0 12%">
							<div class="col-xs-4">
								<button type="submit" id="step_tab_2" class="btn btn-primary">REGISTER</button>
							</div>
						</div>
					
					</form>
              </div>
              <!-- /.tab-pane -->
			  
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

      <!-- END CUSTOM TABS -->

    </section>
    <!-- /.content -->
</div>
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>

<script src="dist/js/tabsInteractionValidation.js"></script>

<script>
  $(function () {
	//message
	$('.displaySms').delay(4000).fadeOut();  
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    
    //Money Euro
    $("[data-mask]").inputmask();

    //iCheck for checkbox and radio inputs
    $('input[type="radio"].minimal').iCheck({
      radioClass: 'iradio_minimal-blue'
    });
	
  });
  
</script>
</body>
</html>
