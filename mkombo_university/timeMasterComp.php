<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuTimeTableMaster.php');
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
			<li class="active"><a href="timeMasterComp.php?user=time_table_master"><i class="fa fa-book"></i> <span>Computer Eng</span> </a></li>
			<li><a href="timeMasterCivil.php?user=time_table_master"><i class="fa fa-book"></i> <span>Civil Eng</span> </a></li>
			<li><a href="timeMasterTele.php?user=time_table_master"><i class="fa fa-book"></i> <span>Telecommunication Eng</span> </a></li>
			<li><a href="timeMasterMech.php?user=time_table_master"><i class="fa fa-book"></i> <span>Mechanical Eng</span> </a></li>
			<li><a href="timeMasterEle.php?user=time_table_master"><i class="fa fa-book"></i> <span>Electrical Eng</span> </a></li>
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
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3">
					<div class="form-group">
						<label>Year:</label><br>
						<select name="year" class="form-control select2"> 
						  <option selected="selected" value="first">First</option>
						  <option value="second">Second</option>
						  <option value="third">Third</option>
						  <option value="forth">Forth</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Semester:</label><br>
						<select name="semester" class="form-control select2">
						  <option selected="selected" value="first">First</option>
						  <option value="second">Second</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="row" style="margin:1% auto; border-bottom:1px dotted #3c8dbc;">
				<div class="col-md-2">
					<label>Monday:</label>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Module Title:</label><br>
								<select name="module_title_mon_1" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time_mon_1" class="form-control timepicker">
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
									<input type="text" name="end_time_mon_1" class="form-control timepicker">
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
								<select name="venue_mon_1" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_mon_2" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_mon_2" class="form-control timepicker">
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
									<input type="text" name="end_time_mon_2" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_mon_2" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_mon_3" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_mon_3" class="form-control timepicker">
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
									<input type="text" name="end_time_mon_3" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_mon_3" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
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
								<select name="module_title_tues_1" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time_tues_1" class="form-control timepicker">
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
									<input type="text" name="end_time_tues_1" class="form-control timepicker">
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
								<select name="venue_tues_1" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_tues_2" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_tues_2" class="form-control timepicker">
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
									<input type="text" name="end_time_tues_2" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_tues_2" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_tues_3" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_tues_3" class="form-control timepicker">
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
									<input type="text" name="end_time_tues_3" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_tues_3" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
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
								<select name="module_title_wednes_1" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time_wednes_1" class="form-control timepicker">
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
									<input type="text" name="end_time_wednes_1" class="form-control timepicker">
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
								<select name="venue_wednes_1" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_wednes_2" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_wednes_2" class="form-control timepicker">
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
									<input type="text" name="end_time_wednes_2" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_wednes_2" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_wednes_3" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_wednes_3" class="form-control timepicker">
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
									<input type="text" name="end_time_wednes_3" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_wednes_3" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
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
								<select name="module_title_thurs_1" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time_thurs_1" class="form-control timepicker">
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
									<input type="text" name="end_time_thurs_1" class="form-control timepicker">
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
								<select name="venue_thurs_1" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_thurs_2" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_thurs_2" class="form-control timepicker">
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
									<input type="text" name="end_time_thurs_2" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_thurs_2" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_thurs_3" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_thurs_3" class="form-control timepicker">
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
									<input type="text" name="end_time_thurs_3" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_thurs_3" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
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
								<select name="module_title_fri_1" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <label>Start Time:</label>
								  <div class="input-group">
									<input type="text" name="start_time_fri_1" class="form-control timepicker">
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
									<input type="text" name="end_time_fri_1" class="form-control timepicker">
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
								<select name="venue_fri_1" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_fri_2" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_fri_2" class="form-control timepicker">
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
									<input type="text" name="end_time_fri_2" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_fri_2" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<select name="module_title_fri_3" class="form-control select2">
								  <option selected="selected">Software Engineering</option>
								  <option>Embeded Systems</option>
								  <option>Teletraffic Engineering</option>
								  <option>User interface Design</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="bootstrap-timepicker">
								<div class="form-group">
								  <div class="input-group">
									<input type="text" name="start_time_fri_3" class="form-control timepicker">
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
									<input type="text" name="end_time_fri_3" class="form-control timepicker">
									<div class="input-group-addon">
									  <i class="fa fa-clock-o"></i>
									</div>
								  </div>
								</div>
							 </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<select name="venue_fri_3" class="form-control select2"> 
								  <option selected="selected">T1</option>
								  <option>T2</option>
								  <option>A1</option>
								  <option>Lab D1</option>
								</select>
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
						<button type="submit" class="btn btn-primary">Create</button>
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