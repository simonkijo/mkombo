<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuAdmissionOfficer.php');
	
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
        <li class="active treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Registered Students</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-file-o"></i> <span>Bachelor Degree</span></a></li>
			<li><a href="#"><i class="fa fa-file-o"></i> <span>Ordinary Diploma</span></a></li>
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
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Information Technology</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Electronics And Comm</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Civil Engineering</span> </a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> <span>Computer Engineering</span> </a></li>
				</ul>
			</li>
          </ul>
        </li>
		<!--end of admission reports-->
		<li><a href="admissionProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Registered Students<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="admissionOfficer.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Registered Students</li>
        <li class="active">Bachelor Degree</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<form method="post" enctype="multipart/form-data">
				
			</form>
		</div>
    </section>
  </div>

<?php 
	include('footer/footer.php');
	include('footer/help.php');
	include('footer/js.php');
?>