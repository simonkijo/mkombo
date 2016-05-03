$(document).bind('keypress', function(e){
	var st_fn = $('.st-fname').val();
	var st_mn = $('.st-mname').val();
	var st_sn = $('.st-sname').val();
	var st_phone = $('.st-phone-no').val();
	var st_email = $('.st-email').val();
	var st_nationality = $('.st-nationality').val();
	var st_birth = $('.st-birth').val();
	var st_country = $('.st-country').val();
	var st_home = $('.st-home').val();
	var st_password = $('.st-password').val();
	var st_password_length = $('.st-password').val().length;
	var st_repassword = $('.st-repassword').val();
	var st_fullname = $('.st-fullname').val();
	var st_phone_p = $('.st-phone-no-p').val();
	var st_email_p = $('.st-email-p').val();
	var st_home_p = $('.st-home-p').val();
	var st_bankname = $('.st-bankname').val();
	var st_bankbranch = $('.st-bankbranch').val();
	var st_account_no = $('.st-account-no').val();
	
	if(e.which == 13){ // when enter key pressed starts validation.
		
		if(st_fn == ""){
			$('.st-fn-err').addClass('has-error');
			$('.st-fn-err-sms').text('First Name is required');
			return false;
		}else if(allLetter(st_fn) == false){
			$('.st-fn-err').addClass('has-error');
			$('.st-fn-err-sms').text('Letters only and no space.');
			return false;
		}
		if(st_mn == ""){
			$('.st-mn-err').addClass('has-error');
			$('.st-mn-err-sms').text('Middle Name is required');
			return false;
		}else if(allLetter(st_mn) == false){
			$('.st-mn-err').addClass('has-error');
			$('.st-mn-err-sms').text('Letters only and no space.');
			return false;
		}
		if(st_sn == ""){
			$('.st-sn-err').addClass('has-error');
			$('.st-sn-err-sms').text('Surname is required');
			return false;
		}else if(allLetter(st_sn) == false){
			$('.st-sn-err').addClass('has-error');
			$('.st-sn-err-sms').text('Letters only and no space.');
			return false;
		}
		if(st_phone == ""){
			$('.st-phone-no-err').addClass('has-error');
			$('.st-phone-no-err-sms').text('Phone number is required');
			return false;
		}else if(phoneNoValidation(st_phone) == false){
			$('.st-phone-no-err').addClass('has-error');
			$('.st-phone-no-err-sms').text('Valid format is, example +255-713-678945');
			return false;
		}
		if(st_email == ""){
			$('.st-email-err').addClass('has-error');
			$('.st-email-err-sms').text('E-mail is required');
			return false;
		}else if(emailValidation(st_email) == false){
			$('.st-email-err').addClass('has-error');
			$('.st-email-err-sms').text('Valid E-mail format is example@gmail.com');
			return false;
		}
		if(st_nationality == ""){
			$('.st-nationality-err').addClass('has-error');
			$('.st-nationality-err-sms').text('Nationality is required');
			return false;
		}else if(nationalityValidation(st_nationality) == false){
			$('.st-nationality-err').addClass('has-error');
			$('.st-nationality-err-sms').text('Letters Only');
			return false;
		}
		if(st_birth == ""){
			$('.st-birth-err').addClass('has-error');
			$('.st-birth-err-sms').text('Birth Date is required');
			return false;
		}else if(birthValidation(st_birth) == false){
			$('.st-birth-err').addClass('has-error');
			$('.st-birth-err-sms').text('Valid format is, example 13/08/1980');
			return false;
		}
		if(st_country == ""){
			$('.st-country-err').addClass('has-error');
			$('.st-country-err-sms').text('Birth Country is required');
			return false;
		}else if(nationalityValidation(st_country) == false){
			$('.st-country-err').addClass('has-error');
			$('.st-country-err-sms').text('Letters Only');
			return false;
		}
		if(st_home == ""){
			$('.st-home-err').addClass('has-error');
			$('.st-home-err-sms').text('Home Place is required');
			return false;
		}else if(nationalityValidation(st_home) == false){
			$('.st-home-err').addClass('has-error');
			$('.st-home-err-sms').text('Letters Only');
			return false;
		}
		if(st_password == ""){
			$('.st-password-err').addClass('has-error');
			$('.st-password-err-sms').text('Password is required');
			return false;
		}else if(st_password_length < 8){
			$('.st-password-err').addClass('has-error');
			$('.st-password-err-sms').text('Too short, Password requires atleast 8 characters.');
			return false;
		}
		if(st_repassword == ""){
			$('.st-repassword-err').addClass('has-error');
			$('.st-repassword-err-sms').text('Please Retype Password');
			return false;
		}else if(st_password != st_repassword){
			$('.st-repassword-err').addClass('has-error');
			$('.st-repassword-err-sms').text('Passwords should match.');
			return false;
		}
		if(st_fullname == ""){
			$('.st-fullname-err').addClass('has-error');
			$('.st-fullname-err-sms').text('Full Name is required');
			return false;
		}else if(nationalityValidation(st_fullname) == false){
			$('.st-fullname-err').addClass('has-error');
			$('.st-fullname-err-sms').text('Letters Only');
			return false;
		}
		if(st_phone_p == ""){
			$('.st-phone-no-err-p').addClass('has-error');
			$('.st-phone-no-err-sms-p').text('Phone number is required');
			return false;
		}else if(phoneNoValidation(st_phone_p) == false){
			$('.st-phone-no-err-p').addClass('has-error');
			$('.st-phone-no-err-sms-p').text('Valid format is, example +255-713-678945');
			return false;
		}
		if(st_email_p == ""){
			$('.st-email-err-p').addClass('has-error');
			$('.st-email-err-sms-p').text('E-mail is required');
			return false;
		}else if(emailValidation(st_email_p) == false){
			$('.st-email-err-p').addClass('has-error');
			$('.st-email-err-sms-p').text('Valid E-mail format is example@gmail.com');
			return false;
		}
		if(st_home_p == ""){
			$('.st-home-err-p').addClass('has-error');
			$('.st-home-err-sms-p').text('Home Place is required');
			return false;
		}else if(nationalityValidation(st_home_p) == false){
			$('.st-home-err-p').addClass('has-error');
			$('.st-home-err-sms-p').text('Letters Only');
			return false;
		}
		if(st_bankname == ""){
			$('.st-bankname-err').addClass('has-error');
			$('.st-bankname-err-sms').text('Bank Name is required');
			return false;
		}else if(nationalityValidation(st_bankname) == false){
			$('.st-bankname-err').addClass('has-error');
			$('.st-bankname-err-sms').text('Letters Only');
			return false;
		}
		if(st_bankbranch == ""){
			$('.st-bankbranch-err').addClass('has-error');
			$('.st-bankbranch-err-sms').text('Bank Branch is required');
			return false;
		}else if(nationalityValidation(st_bankbranch) == false){
			$('.st-bankbranch-err').addClass('has-error');
			$('.st-bankbranch-err-sms').text('Letters Only');
			return false;
		}
		if(st_account_no == ""){
			$('.st-account-no-err').addClass('has-error');
			$('.st-account-no-err-sms').text('Account Number is required');
			return false;
		}else if(accountNoValidation(st_account_no) == false){
			$('.st-account-no-err').addClass('has-error');
			$('.st-account-no-err-sms').text('Numbers Only');
			return false;
		}
		
		/*go to next tab 2*/
		$('#tab-1, #tab_1').removeClass('active');
		$('#tab-2').html('<a href="#" data-toggle="tab">Step 2</a>');
		$('#tab-2, #tab_2').addClass('active');
		$('#tab-1').html('');
	}
	
});

$('#step_tab_1').click(function(){ // also on click NEXT button starts validation.
		var st_fn = $('.st-fname').val();
		var st_mn = $('.st-mname').val();
		var st_sn = $('.st-sname').val();
		var st_phone = $('.st-phone-no').val();
		var st_email = $('.st-email').val();
		var st_nationality = $('.st-nationality').val();
		var st_birth = $('.st-birth').val();
		var st_country = $('.st-country').val();
		var st_home = $('.st-home').val();
		var st_password = $('.st-password').val();
		var st_password_length = $('.st-password').val().length;
		var st_repassword = $('.st-repassword').val();
		var st_fullname = $('.st-fullname').val();
		var st_phone_p = $('.st-phone-no-p').val();
		var st_email_p = $('.st-email-p').val();
		var st_home_p = $('.st-home-p').val();
		var st_bankname = $('.st-bankname').val();
		var st_bankbranch = $('.st-bankbranch').val();
		var st_account_no = $('.st-account-no').val();
		
		if(st_fn == ""){
			$('.st-fn-err').addClass('has-error');
			$('.st-fn-err-sms').text('First Name is required');
			return false;
		}else if(allLetter(st_fn) == false){
			$('.st-fn-err').addClass('has-error');
			$('.st-fn-err-sms').text('Letters only and no space.');
			return false;
		}
		if(st_mn == ""){
			$('.st-mn-err').addClass('has-error');
			$('.st-mn-err-sms').text('Middle Name is required');
			return false;
		}else if(allLetter(st_mn) == false){
			$('.st-mn-err').addClass('has-error');
			$('.st-mn-err-sms').text('Letters only and no space.');
			return false;
		}
		if(st_sn == ""){
			$('.st-sn-err').addClass('has-error');
			$('.st-sn-err-sms').text('Surname is required');
			return false;
		}else if(allLetter(st_sn) == false){
			$('.st-sn-err').addClass('has-error');
			$('.st-sn-err-sms').text('Letters only and no space.');
			return false;
		}
		if(st_phone == ""){
			$('.st-phone-no-err').addClass('has-error');
			$('.st-phone-no-err-sms').text('Phone number is required');
			return false;
		}else if(phoneNoValidation(st_phone) == false){
			$('.st-phone-no-err').addClass('has-error');
			$('.st-phone-no-err-sms').text('Valid format is, example +255-713-678945');
			return false;
		}
		if(st_email == ""){
			$('.st-email-err').addClass('has-error');
			$('.st-email-err-sms').text('E-mail is required');
			return false;
		}else if(emailValidation(st_email) == false){
			$('.st-email-err').addClass('has-error');
			$('.st-email-err-sms').text('Valid E-mail format is example@gmail.com');
			return false;
		}
		if(st_nationality == ""){
			$('.st-nationality-err').addClass('has-error');
			$('.st-nationality-err-sms').text('Nationality is required');
			return false;
		}else if(nationalityValidation(st_nationality) == false){
			$('.st-nationality-err').addClass('has-error');
			$('.st-nationality-err-sms').text('Letters Only');
			return false;
		}
		if(st_birth == ""){
			$('.st-birth-err').addClass('has-error');
			$('.st-birth-err-sms').text('Birth Date is required');
			return false;
		}else if(birthValidation(st_birth) == false){
			$('.st-birth-err').addClass('has-error');
			$('.st-birth-err-sms').text('Valid format is, example 13/08/1980');
			return false;
		}
		if(st_country == ""){
			$('.st-country-err').addClass('has-error');
			$('.st-country-err-sms').text('Birth Country is required');
			return false;
		}else if(nationalityValidation(st_country) == false){
			$('.st-country-err').addClass('has-error');
			$('.st-country-err-sms').text('Letters Only');
			return false;
		}
		if(st_home == ""){
			$('.st-home-err').addClass('has-error');
			$('.st-home-err-sms').text('Home Place is required');
			return false;
		}else if(nationalityValidation(st_home) == false){
			$('.st-home-err').addClass('has-error');
			$('.st-home-err-sms').text('Letters Only');
			return false;
		}
		if(st_password == ""){
			$('.st-password-err').addClass('has-error');
			$('.st-password-err-sms').text('Password is required');
			return false;
		}else if(st_password_length < 8){
			$('.st-password-err').addClass('has-error');
			$('.st-password-err-sms').text('Too short, Password requires atleast 8 characters.');
			return false;
		}
		if(st_repassword == ""){
			$('.st-repassword-err').addClass('has-error');
			$('.st-repassword-err-sms').text('Please Retype Password');
			return false;
		}else if(st_password != st_repassword){
			$('.st-repassword-err').addClass('has-error');
			$('.st-repassword-err-sms').text('Passwords should match.');
			return false;
		}
		if(st_fullname == ""){
			$('.st-fullname-err').addClass('has-error');
			$('.st-fullname-err-sms').text('Full Name is required');
			return false;
		}else if(nationalityValidation(st_fullname) == false){
			$('.st-fullname-err').addClass('has-error');
			$('.st-fullname-err-sms').text('Letters Only');
			return false;
		}
		if(st_phone_p == ""){
			$('.st-phone-no-err-p').addClass('has-error');
			$('.st-phone-no-err-sms-p').text('Phone number is required');
			return false;
		}else if(phoneNoValidation(st_phone_p) == false){
			$('.st-phone-no-err-p').addClass('has-error');
			$('.st-phone-no-err-sms-p').text('Valid format is, example +255-713-678945');
			return false;
		}
		if(st_email_p == ""){
			$('.st-email-err-p').addClass('has-error');
			$('.st-email-err-sms-p').text('E-mail is required');
			return false;
		}else if(emailValidation(st_email_p) == false){
			$('.st-email-err-p').addClass('has-error');
			$('.st-email-err-sms-p').text('Valid E-mail format is example@gmail.com');
			return false;
		}
		if(st_home_p == ""){
			$('.st-home-err-p').addClass('has-error');
			$('.st-home-err-sms-p').text('Home Place is required');
			return false;
		}else if(nationalityValidation(st_home_p) == false){
			$('.st-home-err-p').addClass('has-error');
			$('.st-home-err-sms-p').text('Letters Only');
			return false;
		}
		if(st_bankname == ""){
			$('.st-bankname-err').addClass('has-error');
			$('.st-bankname-err-sms').text('Bank Name is required');
			return false;
		}else if(nationalityValidation(st_bankname) == false){
			$('.st-bankname-err').addClass('has-error');
			$('.st-bankname-err-sms').text('Letters Only');
			return false;
		}
		if(st_bankbranch == ""){
			$('.st-bankbranch-err').addClass('has-error');
			$('.st-bankbranch-err-sms').text('Bank Branch is required');
			return false;
		}else if(nationalityValidation(st_bankbranch) == false){
			$('.st-bankbranch-err').addClass('has-error');
			$('.st-bankbranch-err-sms').text('Letters Only');
			return false;
		}
		if(st_account_no == ""){
			$('.st-account-no-err').addClass('has-error');
			$('.st-account-no-err-sms').text('Account Number is required');
			return false;
		}else if(accountNoValidation(st_account_no) == false){
			$('.st-account-no-err').addClass('has-error');
			$('.st-account-no-err-sms').text('Numbers Only');
			return false;
		}
		
		/*go to next tab 2*/
		$('#tab-1, #tab_1').removeClass('active');
		$('#tab-2').html('<a href="#" data-toggle="tab">Step 2</a>');
		$('#tab-2, #tab_2').addClass('active');
		$('#tab-1').html('');
});
	
$('#step_tab_2').click(function(){
	var st_index_no = $('.st-index-no').val();
	var st_schoolname = $('.st-schoolname').val();
	var st_schoollocation = $('.st-schoollocation').val();
	var st_cert = $('.st-cert').val();
	var st_completionyr = $('.st-completionyr').val();
	var st_index_no_a = $('.st-indexno-a').val();
	var st_schoolname_a = $('.st-schoolname-a').val();
	var st_schoollocation_a = $('.st-schoolloc-a').val();
	var st_cert_a = $('.st-cert-a').val();
	var st_completionyr_a = $('.st-completionyr-a').val();
	var m_no = $('.m-no').val();
	var v_no = $('.v-no').val();
	var box_p = $('.box-p').val();
	var issue_d = $('.issue-d').val();
	var sponsor_n = $('.sponsorn').val();
	var sponsor_no = $('.sponsor-no').val();
	var sponsor_email = $('.sponsor-email').val();
	
	if(st_index_no == ""){
		$('.st-index-no-err').addClass('has-error');
		$('.st-index-no-err-sms').text('Index Number is required');
		return false;
	}else if(indexNoValidation(st_index_no) == false){
		$('.st-index-no-err').addClass('has-error');
		$('.st-index-no-err-sms').text('Valid format is, example S0938/0205/2009 or P0938/0205/2009');
		return false;
	}
	if(st_schoolname == ""){
		$('.st-schoolname-err').addClass('has-error');
		$('.st-schoolname-err-sms').text('School Name is required');
		return false;
	}else if(nationalityValidation(st_schoolname) == false){
		$('.st-schoolname-err').addClass('has-error');
		$('.st-schoolname-err-sms').text('Letters Only');
		return false;
	}
	if(st_schoollocation == ""){
		$('.st-schoollocation-err').addClass('has-error');
		$('.st-schoollocation-err-sms').text('The region, school is located.');
		return false;
	}else if(nationalityValidation(st_schoollocation) == false){
		$('.st-schoollocation-err').addClass('has-error');
		$('.st-schoollocation-err-sms').text('Letters Only');
		return false;
	}
	if(st_cert == ""){
		$('.st-cert-err').addClass('has-error');
		$('.st-cert-err-sms').text('Type Certificate name in long or short format.');
		return false;
	}else if(nationalityValidation(st_cert) == false){
		$('.st-cert-err').addClass('has-error');
		$('.st-cert-err-sms').text('Letters Only');
		return false;
	}
	if(st_completionyr == ""){
		$('.st-completionyr-err').addClass('has-error');
		$('.st-completionyr-err-sms').text('Type the year of completion.');
		return false;
	}else if(accountNoValidation(st_completionyr) == false){
		$('.st-completionyr-err').addClass('has-error');
		$('.st-completionyr-err-sms').text('Numbers Only, example 2009.');
		return false;
	}
	if(st_index_no_a == ""){
		$('.st-index-no-err-a').addClass('has-error');
		$('.st-index-no-err-sms-a').text('Index Number is required');
		return false;
	}else if(indexNoValidation(st_index_no_a) == false){
		$('.st-index-no-err-a').addClass('has-error');
		$('.st-index-no-err-sms-a').text('Valid format is, example S0938/0205/2009 or P0938/0205/2009');
		return false;
	}
	if(st_schoolname_a == ""){
		$('.st-schoolname-err-a').addClass('has-error');
		$('.st-schoolname-err-sms-a').text('School Name is required');
		return false;
	}else if(nationalityValidation(st_schoolname_a) == false){
		$('.st-schoolname-err-a').addClass('has-error');
		$('.st-schoolname-err-sms-a').text('Letters Only');
		return false;
	}
	if(st_schoollocation_a == ""){
		$('.st-schoollocation-err-a').addClass('has-error');
		$('.st-schoollocation-err-sms-a').text('The region, school is located.');
		return false;
	}else if(nationalityValidation(st_schoollocation_a) == false){
		$('.st-schoollocation-err-a').addClass('has-error');
		$('.st-schoollocation-err-sms-a').text('Letters Only');
		return false;
	}
	if(st_cert_a == ""){
		$('.st-cert-err-a').addClass('has-error');
		$('.st-cert-err-sms-a').text('Type Certificate name in long or short format.');
		return false;
	}else if(nationalityValidation(st_cert_a) == false){
		$('.st-cert-err-a').addClass('has-error');
		$('.st-cert-err-sms-a').text('Letters Only');
		return false;
	}
	if(st_completionyr_a == ""){
		$('.st-completionyr-err-a').addClass('has-error');
		$('.st-completionyr-err-sms-a').text('Type the year of completion.');
		return false;
	}else if(accountNoValidation(st_completionyr_a) == false){
		$('.st-completionyr-err-a').addClass('has-error');
		$('.st-completionyr-err-sms-a').text('Numbers Only, example 2009.');
		return false;
	}
	if(m_no != "" && membershipNoValidation(m_no) == false){
		$('.m-no-err').addClass('has-error');
		$('.m-no-err-sms').text('Valid format is, example 10-12345678.');
		return false;
	}
	/*if(v_no == ""){
		$('.v-no-err').addClass('has-error');
		$('.v-no-err-sms').text('Vote number is required.');
		return false;
	}
	if(box_p == ""){
		$('.box-p-err').addClass('has-error');
		$('.box-p-err-sms').text('P.O.Box address is required.');
		return false;
	}*/
	if(issue_d != "" && birthValidation(issue_d) == false){
		$('.issue-d-err').addClass('has-error');
		$('.issue-d-err-sms').text('Valid format is, example 13/08/1980');
		return false;
	}
	if(sponsor_n !="" && nationalityValidation(sponsor_n) == false){
		$('.sponsorn-err').addClass('has-error');
		$('.sponsorn-err-sms').text('Letters Only.');
		return false;
	}
	if(sponsor_no != "" && phoneNoValidation(sponsor_no) == false){
		$('.sponsor-no-err').addClass('has-error');
		$('.sponsor-no-err-sms').text('Valid format is, example +255-713-678945');
		return false;
	}
	if(sponsor_email != "" && emailValidation(sponsor_email) == false){
		$('.sponsor-email-err').addClass('has-error');
		$('.sponsor-email-err-sms').text('Valid format is, example myemail@gmail.com');
		return false;
	}
		
	/*go to tab 1*/
	/*$('#tab-2, #tab_2').removeClass('active');
	$('#tab-1').html('<a href="#" data-toggle="tab">Step 1</a>');
	$('#tab-1, #tab_1').addClass('active');
	$('#tab-2').html('');*/
	
});
	
	$('.st-fname').keyup(function(){
		$('.st-fn-err').removeClass('has-error');
		$('.st-fn-err-sms').text('');
	});
	$('.st-mname').keyup(function(){
		$('.st-mn-err').removeClass('has-error');
		$('.st-mn-err-sms').text('');
	});
	$('.st-sname').keyup(function(){
		$('.st-sn-err').removeClass('has-error');
		$('.st-sn-err-sms').text('');
	});
	$('.st-phone-no,.st-phone-no-p').keyup(function(){
		$('.st-phone-no-err,.st-phone-no-err-p').removeClass('has-error');
		$('.st-phone-no-err-sms,.st-phone-no-err-sms-p').text('');
	});
	$('.st-email,.st-email-p').keyup(function(){
		$('.st-email-err,.st-email-err-p').removeClass('has-error');
		$('.st-email-err-sms,.st-email-err-sms-p').text('');
	});
	$('.st-nationality').keyup(function(){
		$('.st-nationality-err').removeClass('has-error');
		$('.st-nationality-err-sms').text('');
	});
	$('.st-birth').keyup(function(){
		$('.st-birth-err').removeClass('has-error');
		$('.st-birth-err-sms').text('');
	});
	$('.st-country').keyup(function(){
		$('.st-country-err').removeClass('has-error');
		$('.st-country-err-sms').text('');
	});
	$('.st-home,.st-home-p').keyup(function(){
		$('.st-home-err,.st-home-err-p').removeClass('has-error');
		$('.st-home-err-sms,.st-home-err-sms-p').text('');
	});
	$('.st-password').keyup(function(){
		$('.st-password-err').removeClass('has-error');
		$('.st-password-err-sms').text('');
	});
	$('.st-repassword').keyup(function(){
		$('.st-repassword-err').removeClass('has-error');
		$('.st-repassword-err-sms').text('');
	});
	$('.st-fullname').keyup(function(){
		$('.st-fullname-err').removeClass('has-error');
		$('.st-fullname-err-sms').text('');
	});
	$('.st-bankname').keyup(function(){
		$('.st-bankname-err').removeClass('has-error');
		$('.st-bankname-err-sms').text('');
	});
	$('.st-bankbranch').keyup(function(){
		$('.st-bankbranch-err').removeClass('has-error');
		$('.st-bankbranch-err-sms').text('');
	});
	$('.st-account-no').keyup(function(){
		$('.st-account-no-err').removeClass('has-error');
		$('.st-account-no-err-sms').text('');
	});
	$('.st-index-no,.st-indexno-a').keyup(function(){
		$('.st-index-no-err,.st-index-no-err-a').removeClass('has-error');
		$('.st-index-no-err-sms,.st-index-no-err-sms-a').text('');
	});
	$('.st-schoolname,.st-schoolname-a').keyup(function(){
		$('.st-schoolname-err,.st-schoolname-err-a').removeClass('has-error');
		$('.st-schoolname-err-sms,.st-schoolname-err-sms-a').text('');
	});
	$('.st-schoollocation,.st-schoolloc-a').keyup(function(){
		$('.st-schoollocation-err,.st-schoollocation-err-a').removeClass('has-error');
		$('.st-schoollocation-err-sms,.st-schoollocation-err-sms-a').text('');
	});
	$('.st-cert,.st-cert-a').keyup(function(){
		$('.st-cert-err,.st-cert-err-a').removeClass('has-error');
		$('.st-cert-err-sms,.st-cert-err-sms-a').text('');
	});
	$('.st-completionyr,.st-completionyr-a').keyup(function(){
		$('.st-completionyr-err,.st-completionyr-err-a').removeClass('has-error');
		$('.st-completionyr-err-sms,.st-completionyr-err-sms-a').text('');
	});
	$('.m-no').keyup(function(){
		$('.m-no-err').removeClass('has-error');
		$('.m-no-err-sms').text('');
	});
	$('.v-no').keyup(function(){
		$('.v-no-err').removeClass('has-error');
		$('.v-no-err-sms').text('');
	});
	$('.box-p').keyup(function(){
		$('.box-p-err').removeClass('has-error');
		$('.box-p-err-sms').text('');
	});
	$('.issue-d').keyup(function(){
		$('.issue-d-err').removeClass('has-error');
		$('.issue-d-err-sms').text('');
	});
	$('.sponsorn').keyup(function(){
		$('.sponsorn-err').removeClass('has-error');
		$('.sponsorn-err-sms').text('');
	});
	$('.sponsor-no').keyup(function(){
		$('.sponsor-no-err').removeClass('has-error');
		$('.sponsor-no-err-sms').text('');
	});
	$('.sponsor-email').keyup(function(){
		$('.sponsor-email-err').removeClass('has-error');
		$('.sponsor-email-err-sms').text('');
	});
	
	//for checking account number contains allnumeric.
	function accountNoValidation(parameter){    
		var numbers = /^[0-9]+$/.test(parameter);
		if(numbers == true){  
			return true;  
		}else{    
			return false;  
		}  
	}
	//for checking characters and space in nationality.
	function nationalityValidation(parameter){    
		var letters = /^[A-Za-z ]+$/.test(parameter);
		if(letters == true){  
			return true;  
		}else{    
			return false;  
		}  
	}
	//for checking characters only in names.
	function allLetter(parameter){    
		var letters = /^[A-Za-z]+$/.test(parameter);
		if(letters == true){  
			return true;  
		}else{    
			return false;  
		}  
	}
	//for validating index number.
	function indexNoValidation(parameter){
		var index_no = /^[A-Z]([0-9]{4})?[/]?([0-9]{4})[/]?([0-9]{4})$/.test(parameter);
		if(index_no == true){  
			return true;  
		}else{    
			return false;  
		}
	}
	//for validating birth date.
	function birthValidation(parameter){
		var date_month_year = /^([0-9]{2})?[/]?([0-9]{2})[/]?([0-9]{4})$/.test(parameter);
		if(date_month_year == true){  
			return true;  
		}else{    
			return false;  
		}
	}
	//for validating health insurance membership no.
	function membershipNoValidation(parameter){
		var numbers = /^([0-9]{2})?[-]?([0-9]{8})$/.test(parameter);
		if(numbers == true){  
			return true;  
		}else{    
			return false;  
		}
	}
	//for validating phone no
	function phoneNoValidation(parameter){
		var numbers = /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{6})$/.test(parameter);
		if(numbers == true){  
			return true;  
		}else{    
			return false;  
		}
	}
	//for validating email
	function emailValidation(parameter){
		var mailformat = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,3})+$/.test(parameter);
		if(mailformat == true){  
			return true;  
		}else{    
			return false;  
		}
	}
	