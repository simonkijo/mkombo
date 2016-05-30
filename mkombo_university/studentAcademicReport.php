<?php 
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuStudent.php');
	
	if(logged_in()){
		
	}else{
		header('Location: studentLogin.php');
	}
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">USER MANAGEMENT</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="student.php"><i class="fa fa-table"></i> <span>Class Time Table</span> </a></li>
        <li><a href="studentSubjectsCat.php"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> </a></li>
		<!--end of subjects catalog-->
		<li class="active"><a href="studentAcademicReport.php"><i class="fa fa-files-o"></i> <span>Academic Reports</span> </a></li>
		<!--end of academic report-->
		<li><a href="studentProfile.php"><i class="fa fa-user"></i> <span>Profile Settings</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Academic Report<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="student.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Academic Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary box-height" style="margin-bottom:0;">
			<div class="row" style="margin:2% auto;">
				<form method="post" enctype="multipart/form-data">
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
				<div class="col-md-3">
					<div class="form-group">
						<label></label><br>
						<button type="submit" class="btn btn-primary">Show</button>
					</div>
				</div>
				</form>
			</div>
			<div class="row">
				<div class="col-md-11">
					<div class="box-body">
						<table id="academic_report" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Module Title</th>
								  <th>Continuous Assessment (%)</th>
								  <th>Final Examination (%)</th>
								  <th>Total (%)</th>
								  <th>Grade</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>module 1</td>
								  <td>23</td>
								  <td>50</td>
								  <td>73</td>
								  <td>B+</td>
								</tr>
								<tr>
								  <td>module 2</td>
								  <td>33</td>
								  <td>60</td>
								  <td>93</td>
								  <td>A</td>
								</tr>
								<tr>
								  <td>module 4</td>
								  <td>23</td>
								  <td>50</td>
								  <td>73</td>
								  <td>B+</td>
								</tr>
								<tr>
								  <td>module 3</td>
								  <td>33</td>
								  <td>60</td>
								  <td>93</td>
								  <td>A</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="box-body">
						<table id="academic_report_gpa" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>GPA</th>
								  <th>Award Class</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>3.893</td>
								  <td>Upper Second Class</td>
								</tr>
							</tbody>
						</table>
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