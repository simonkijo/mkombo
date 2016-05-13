<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuExamOfficer.php');
?>
<aside class="main-sidebar">

    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <li class="active treeview">
          <a href="#"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li class="active">
				<a href="#"><i class="fa fa-book"></i> <span>Bachelor Degree</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li class="active"><a href="examinationOfficer.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Computer Eng</span> </a></li>
					<li><a href="examOfficerCivil.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Civil Eng</span> </a></li>
					<li><a href="examOfficerTele.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Telecommunication Eng</span> </a></li>
					<li><a href="examOfficerMech.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Mechanical Eng</span> </a></li>
					<li><a href="examOfficerEle.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Electrical Eng</span> </a></li>
				</ul>
			</li>
          </ul>
        </li>
		<!--end of subjects catalog-->
		<li class="treeview">
          <a href="#"><i class="fa fa-files-o"></i> <span>GPA Computation</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li><a href="examGpaComp.php?user=examination_officer"><i class="fa fa-book"></i> <span>Computer Eng</span> </a></li>
			<li><a href="examGpaCivil.php?user=examination_officer"><i class="fa fa-book"></i> <span>Civil Eng</span> </a></li>
			<li><a href="examGpaTele.php?user=examination_officer"><i class="fa fa-book"></i> <span>Telecommunication Eng</span> </a></li>
			<li><a href="examGpaMech.php?user=examination_officer"><i class="fa fa-book"></i> <span>Mechanical Eng</span> </a></li>
			<li><a href="examGpaEle.php?user=examination_officer"><i class="fa fa-book"></i> <span>Electrical Eng</span> </a></li>
          </ul>
        </li>
		<!--end of GPA computation-->
		<li><a href="examOfficerProfile.php?user=examination_officer"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Subjects Catalogue<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="examinationOfficer.php?user=examination_officer"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Bachelor Degree</li>
        <li class="active">Computer Eng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<form method="post" enctype="multipart/form-data">
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
			<div class="row" style="margin:2% auto;">
				<div class="col-md-2">
					<div class="form-group">
						<label>Code:</label>
						<div class="form-group code_">
						  <input type="text" class="form-control" name="code_1"><br>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Module Title:</label>
						<div class="form-group module_">
						  <input type="text" class="form-control" name="module_title_1"><br>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Credit:</label>
						<div class="form-group credit_">
						  <input type="text" class="form-control" name="credit_1"><br>
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<a class="btn btn-primary addBtnModule">Add another</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
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