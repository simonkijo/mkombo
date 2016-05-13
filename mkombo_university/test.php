<?php 
	error_reporting('E_NOTICE');
	include('config/config.php');
	include('config/functions.php');
	//echo regGenerator();
	
	/*$query ="SELECT `subject_taken` FROM `mkombo_university`.`academic_info` WHERE `reg_no`='160219088199'";
	$res = mysql_query($query);
	$w = mysql_result($res,0,'subject_taken');
	printSubjects($w);*/
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$subject_taken[] = $_POST['subject_taken'];
		
		//$bn = loopElements($subject_taken);
		//$qr = "UPDATE `mkombo_university`.`academic_info` SET `subject_taken`='".$bn."' WHERE `reg_no`='160219088199'";
		//mysql_query($qr);
	}
	
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MU | MKOMBO UNIVERSITY</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/mkombo.min.css">
  <!-- skin-blue -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
</head>
<body>
<form method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-md-5">
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
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		<button type="submit" class="btn btn-primary">REGISTER</button>
	</div>
</div>
</form>
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- App -->
<script src="dist/js/app.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2(); 
  });
</script>
</body>
</html>