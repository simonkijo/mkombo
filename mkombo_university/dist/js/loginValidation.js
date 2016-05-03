$('.log-in-student').click(function(){
	var reg_id = $('.reg-id').val();
	var pass = $('.password').val();
	
	if(reg_id == ""){
		$('.id-err').addClass('has-error');
		$('.id-err-sms').text('Please fill Registration ID.');
		return false;
	}else if(numberValidation(reg_id) == false){
		$('.id-err').addClass('has-error');
		$('.id-err-sms').text('Numbers Only');
		return false;
	}
	if(pass == ""){
		$('.password-err').addClass('has-error');
		$('.password-err-sms').text('Please fill Password.');
		return false;
	}
});
$('.log-in-staff').click(function(){
	var username = $('.username').val();
	var pass = $('.password').val();
	
	if(username == ""){
		$('.username-err').addClass('has-error');
		$('.username-err-sms').text('Please fill Username.');
		return false;
	}
	if(pass == ""){
		$('.password-err').addClass('has-error');
		$('.password-err-sms').text('Please fill Password.');
		return false;
	}
});
$('.reg-id,.username,.password').keyup(function(){
	$('.id-err,.username-err,.password-err').removeClass('has-error');
	$('.id-err-sms,.username-err-sms,.password-err-sms').text('');
});
//for checking account number contains allnumeric.
function numberValidation(parameter){    
	var numbers = /^[0-9]+$/.test(parameter);
	if(numbers == true){  
		return true;  
	}else{    
		return false;  
	}  
}