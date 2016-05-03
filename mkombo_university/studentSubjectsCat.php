<?php 
	include('header/head.php');
	include('header/asideMenuStudent.php');
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
        <li class="active"><a href="studentSubjectsCat.php"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> </a></li>
		<!--end of subjects catalog-->
		<li><a href="studentAcademicReport.php"><i class="fa fa-files-o"></i> <span>Academic Reports</span> </a></li>
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
      <h1>Subjects Catalogue<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="student.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subjects Catalogue</li>
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
						<table id="studentSubjectsCat" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Code</th>
								  <th>Module Title</th>
								  <th>Credit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>cseu 08734</td>
								  <td>module 1</td>
								  <td>6</td>
								</tr>
								<tr>
								  <td>cseu 08234</td>
								  <td>module 2</td>
								  <td>8</td>
								</tr>
								<tr>
								  <td>cseu 08331</td>
								  <td>module 3</td>
								  <td>16</td>
								</tr>
								<tr>
								  <td>cseu 08134</td>
								  <td>module 5</td>
								  <td>9</td>
								</tr>
								<tr>
								  <td>cseu 08221</td>
								  <td>module 8</td>
								  <td>10</td>
								</tr>
								<tr>
								  <td>cseu 08131</td>
								  <td>module 6</td>
								  <td>5</td>
								</tr>
								<tr>
								  <td>cseu 08734</td>
								  <td>module 1</td>
								  <td>6</td>
								</tr>
								<tr>
								  <td>cseu 08234</td>
								  <td>module 2</td>
								  <td>8</td>
								</tr>
								<tr>
								  <td>cseu 08331</td>
								  <td>module 3</td>
								  <td>16</td>
								</tr>
								<tr>
								  <td>cseu 08134</td>
								  <td>module 5</td>
								  <td>9</td>
								</tr>
								<tr>
								  <td>cseu 08221</td>
								  <td>module 8</td>
								  <td>10</td>
								</tr>
								<tr>
								  <td>cseu 08131</td>
								  <td>module 6</td>
								  <td>5</td>
								</tr>
								<tr>
								  <td>cseu 08734</td>
								  <td>module 1</td>
								  <td>6</td>
								</tr>
								<tr>
								  <td>cseu 08234</td>
								  <td>module 2</td>
								  <td>8</td>
								</tr>
								<tr>
								  <td>cseu 08331</td>
								  <td>module 3</td>
								  <td>16</td>
								</tr>
								<tr>
								  <td>cseu 08134</td>
								  <td>module 5</td>
								  <td>9</td>
								</tr>
								<tr>
								  <td>cseu 08221</td>
								  <td>module 8</td>
								  <td>10</td>
								</tr>
								<tr>
								  <td>cseu 08131</td>
								  <td>module 6</td>
								  <td>5</td>
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