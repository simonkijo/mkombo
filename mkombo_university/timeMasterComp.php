<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuTimeTableMaster.php');
	include('data/venueSelection.php');
	include('data/moduleOption.php');
	include('data/timeTableData.php');
	
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
        <li><a href="timeTableMaster.php?user=time_table_master"><i class="fa fa-th"></i> <span>Venue Management</span> </a></li>
		<li class="active treeview">
          <a href="#"><i class="fa fa-table"></i> <span>Class Time Table</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li class="active"><a href="timeMasterComp.php?user=time_table_master&class=computer"><i class="fa fa-book"></i> <span>Computer Eng</span> </a></li>
			<li><a href="timeMasterCivil.php?user=time_table_master&class=civil"><i class="fa fa-book"></i> <span>Civil Eng</span> </a></li>
			<li><a href="timeMasterTele.php?user=time_table_master&class=telecom"><i class="fa fa-book"></i> <span>Telecommunication Eng</span> </a></li>
			<li><a href="timeMasterMech.php?user=time_table_master&class=mechanical"><i class="fa fa-book"></i> <span>Mechanical Eng</span> </a></li>
			<li><a href="timeMasterEle.php?user=time_table_master&class=electrical"><i class="fa fa-book"></i> <span>Electrical Eng</span> </a></li>
          </ul>
        </li>
		<!--end of class time table-->
		<li><a href="timeMasterProfile.php?user=time_table_master"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Class Time Table<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="timeTableMaster.php?user=time_table_master"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Class Time Table</li>
		<li class="active">Computer Eng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
			if(isset($tm_success)){
				if($tm_success == 'success'){
					echo "<div class='callout callout-success displaySms'>
							<h4>Successfully !</h4>
							<p>Class Time Table is successful created.</p>
						</div>";
				}else if($tm_success == 'fail'){
					echo "<div class='callout callout-danger displaySms'>
						<h4>ERROR !</h4>
						<p>Sorry something went wrong, try again.</p>
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
				<div class="col-md-3">
					<div class="form-group">
						<label>Year:</label><br>
						<select name="year" class="form-control select2 year">
						  <option selected="selected" value="">Select a year</option>
						  <option value="first">First</option>
						  <option value="second">Second</option>
						  <option value="third">Third</option>
						  <option value="forth">Forth</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Semester:</label><br>
						<select name="semester" class="form-control select2 semester">
						  <option selected="selected" value="">Select a semester</option>
						  <option value="first">First</option>
						  <option value="second">Second</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="show" class="btn btn-primary show">Show</button>
					</div>
				</div>
			</div>
			<div class="hideshow">
<?php
		if(isset($data) && !empty($data)){			
			echo '<div class="row" style="margin:1% auto; border-bottom:1px dotted #3c8dbc;">
				<div class="col-md-2">
					<label>Monday:</label>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Module Title:</label><br>
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>End Time:</label>
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Venue:</label><br>
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin:1% auto; border-bottom:1px dotted #3c8dbc;">
				<div class="col-md-2">
					<label>Tuesday:</label>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Module Title:</label><br>
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>End Time:</label>
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Venue:</label><br>
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin:1% auto; border-bottom:1px dotted #3c8dbc;">
				<div class="col-md-2">
					<label>Wednesday:</label>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Module Title:</label><br>
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>End Time:</label>
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Venue:</label><br>
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>								  
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin:1% auto; border-bottom:1px dotted #3c8dbc;">
				<div class="col-md-2">
					<label>Thursday:</label>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Module Title:</label><br>
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>End Time:</label>
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Venue:</label><br>
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>								  
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>								  
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin:1% auto; border-bottom:1px dotted #3c8dbc;">
				<div class="col-md-2">
					<label>Friday:</label>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Module Title:</label><br>
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>End Time:</label>
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Venue:</label><br>
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>								  
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>								  
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title[]" class="form-control select2">
								  <option selected="selected">NO LESSON</option>';
?>
								  <?php 
										foreach($data as $mod){
											echo "<option>".$mod."</option>";
										}
								  ?>
<?php
						echo	'</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="end_time[]" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue[]" class="form-control select2"> 
								  <option selected="selected">NONE</option>';
?>								  
								  <?php 
									if(isset($res)){
										foreach($res as $v){
											echo "<option>".$v."</option>";
										}
									}
								  ?>
<?php								  
						echo	'</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" name="create" class="btn btn-primary">Create</button>
					</div>
				</div>
			</div>';
		}	
?>
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