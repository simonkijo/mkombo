<?php
	include('../config/config.php');
	include('../config/functions.php');
	include('header/head.php');
	include('header/asideMenuAdmin.php');
	
	if(logged_in()){
		
	}else{
		header('Location: adminLogin.php');
	}
?>
<aside class="main-sidebar">

    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
		<li class="active treeview">
			<a href="#"><i class="fa fa-book"></i> <span>Student Management</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li class="active"><a href="#"><i class="fa fa-file-o"></i> <span>Bachelor Degree</span></a></li>
				<li><a href="#"><i class="fa fa-file-o"></i> <span>Ordinary Diploma</span></a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"><i class="fa fa-book"></i> <span>Lecturer Management</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-file-o"></i> <span>Bachelor Degree</span></a></li>
				<li><a href="#"><i class="fa fa-file-o"></i> <span>Ordinary Diploma</span></a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-book"></i> <span>Staff Management</span></a></li>
		<li><a href="adminProfile.php?user=admin"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Student Management<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="admin.php?user=admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student Management</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
  </div>

<?php 
	include('footer/footer.php');
	include('footer/help.php');
	include('footer/js.php');
?>