<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- App -->
<script src="dist/js/app.min.js"></script>
<!--validating profile -->
<script src="dist/js/profileValidation.js"></script>
<script>
  $(function () {
	//message
	$('.displaySms').delay(7000).fadeOut();
	//Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
	//for button which adds new input field in venue management.
	  var n = 1;
	$('.addBtn').click(function(){
		$('.another_input').append('<input type="text" class="form-control" name="venue[]"><br>');
	});
	//for button which adds new input field in subjects catalogue.
	$('.addBtnModule').click(function(){
		$('.code_').append('<input type="text" class="form-control" name="code[]"><br>');
		$('.module_').append('<input type="text" class="form-control" name="module_title[]"><br>');
		$('.credit_').append('<input type="text" class="form-control" name="credit[]"><br>');
	});
	$('.addBtnCourse').click(function(){
		$('.course').append('<input type="text" class="form-control" name="course[]"><br>');
	});
    //Initialize Select2 Elements
    $(".select2").select2();
	$('#examGpa').DataTable();
	$('#time_table').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
	$('#studentSubjectsCat').DataTable();
	$('#academic_report').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#academic_report_gpa').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    }); 
	$('#lecturerStudentMarks').DataTable(); 
	$('#moduleAssignment').DataTable({
		"ordering": false
	});
	$('#StudentMarks').DataTable({
		"paging": false,
		"lengthChange": false,
		"info": false,
		"ordering": false
	});
  });
</script>
</body>
</html>