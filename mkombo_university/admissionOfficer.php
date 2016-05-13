<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuAdmissionOfficer.php');
	
	
?>
<aside class="main-sidebar">

    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <li class="active treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Students Approval</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li class="active">
				<a href="#"><i class="fa fa-file-o"></i> <span>Bachelor Degree</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li class="active"><a href="admissionOfficer.php?user=admission_officer"><i class="fa fa-file-o"></i> <span>Computer Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-file-o"></i> <span>Civil Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-file-o"></i> <span>Telecommunication Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-file-o"></i> <span>Mechanical Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-file-o"></i> <span>Electrical Eng</span> </a></li>
				</ul>
			</li>
          </ul>
        </li>
		<!--end of students approval-->
		<li class="treeview">
          <a href="#"><i class="fa fa-pie-chart"></i> <span>Admission Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li><a href="#"><i class="fa fa-user"></i> <span>All Students</span></a></li>
            <li>
				<a href="#"><i class="fa fa-files-o"></i> <span>Students by Course</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Computer Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Civil Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Telecommunication Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Mechanical Eng</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Electrical Eng</span> </a></li>
				</ul>
			</li>
          </ul>
        </li>
		<!--end of admission reports-->
		<li><a href="admissionProfile.php?user=admission_officer"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Page Header<small>Optional description</small></h1>
      <ol class="breadcrumb">
        <li><a href="admissionOfficer.php?user=admission_officer"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Bachelor Degree</li>
        <li class="active">Computer Eng</li>
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