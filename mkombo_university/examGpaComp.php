<?php
	include('config/config.php');
	include('config/functions.php');
	include('header/head.php');
	include('header/asideMenuExamOfficer.php');
	
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
        <li class="treeview">
          <a href="#"><i class="fa fa-th"></i> <span>Subjects Catalogue</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li>
				<a href="#"><i class="fa fa-book"></i> <span>Bachelor Degree</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="examinationOfficer.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Computer Eng</span> </a></li>
					<li><a href="examOfficerCivil.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Civil Eng</span> </a></li>
					<li><a href="examOfficerTele.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Telecommunication Eng</span> </a></li>
					<li><a href="examOfficerMech.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Mechanical Eng</span> </a></li>
					<li><a href="examOfficerEle.php?user=examination_officer"><i class="fa fa-circle-o"></i> <span>Electrical Eng</span> </a></li>
				</ul>
			</li>
          </ul>
        </li>
		<!--end of subjects catalog-->
		<li class="active treeview">
          <a href="#"><i class="fa fa-files-o"></i> <span>GPA Computation</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
			<li class="active"><a href="examGpaComp.php?user=examination_officer"><i class="fa fa-book"></i> <span>Computer Eng</span> </a></li>
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
      <h1>GPA Computation<small></small></h1>
      <ol class="breadcrumb">
        <li><a href="examinationOfficer.php?user=examination_officer"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>GPA Computation</li>
        <li class="active">Computer Eng</li>
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
						<button type="submit" class="btn btn-primary">Load</button>
					</div>
				</div>
				</form>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box-body">
						<table id="examGpa" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Reg No</th>
								  <th> </th>
								  <th>cseu 08231</th>
								  <th>code 2</th>
								  <th>code 3</th>
								  <th>code 4</th>
								  <th>code 5</th>
								  <th>code 6</th>
								  <th>code 7</th>
								  <th>code 8</th>
								  <th>code 9</th>
								  <th>code 10</th>
								  <th>code 11</th>
								  <th>GPA</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="4">120232472337</td>
									<td>CA</td>
									<td>13</td>
									<td>14</td>
									<td>23</td>
									<td>13</td>
									<td>14</td>
									<td>23</td>
									<td>13</td>
									<td>14</td>
									<td>23</td>
									<td>13</td>
									<td>14</td>
									<td rowspan="4">3.89</td>
								</tr>
								<tr>
									<td>FE</td>
									<td>35</td>
									<td>49</td>
									<td>58</td>
									<td>59</td>
									<td>40</td>
									<td>36</td>
									<td>56</td>
									<td>50</td>
									<td>50</td>
									<td>45</td>
									<td>30</td>
								</tr>
								<tr>
									<td>TOTAL</td>
									<td>35</td>
									<td>49</td>
									<td>58</td>
									<td>59</td>
									<td>40</td>
									<td>36</td>
									<td>56</td>
									<td>50</td>
									<td>50</td>
									<td>45</td>
									<td>30</td>
								</tr>
								<tr>
									<td>GRADE</td>
									<td>A</td>
									<td>B</td>
									<td>A</td>
									<td>C</td>
									<td>B+</td>
									<td>A</td>
									<td>B</td>
									<td>C</td>
									<td>A</td>
									<td>A</td>
									<td>B</td>
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