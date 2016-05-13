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
        <li class="active"><a href="timeTableMaster.php?user=time_table_master"><i class="fa fa-th"></i> <span>Venue Management</span> </a></li>
		<li class="treeview">
          <a href="#"><i class="fa fa-table"></i> <span>Class Time Table</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li><a href="timeMasterComp.php?user=time_table_master"><i class="fa fa-book"></i> <span>Computer Eng</span> </a></li>
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
      <h1>Venue Management<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="timeTableMaster.php?user=time_table_master"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Venue Management</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<form method="post" enctype="multipart/form-data">
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3">
					<div class="form-group">
						<label>Venue Title:</label>
						<div class="form-group another_input">
						  <input type="text" class="form-control" name="venue_1"><br>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<a class="btn btn-primary addBtn">Add another</a>
					</div>
				</div>
			</div>
			<div class="row" style="margin:2% auto;">
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" class="btn btn-primary">Save</button>
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