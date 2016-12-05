// validateEmail
function vE(input){	
	var email, regex, r;
	email = input.value;
    regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    r = regex.test(email);
    if(!r){
		$(input).css('color' , 'red');
	}
	else{		
		$(input).css('color' , 'green');
	}
    return r;
}

//validateName
function vN(input){
	var name, regex, r;
	name = input.value;
	regex = /^[A-Za-z ]{2,30}$/;
	r = regex.test(name);
	if(!r){
		$(input).css('color' , 'red');
	}
	else{		
		$(input).css('color' , 'green');
	}
	return r;
}

//validatePasswordMatch
function vPM(){
	var r, pwd1, pwd2;
	r = false;
	pwd1 = $("input[name=pwd]");
	pwd2 = $("input[name=rpwd]");
	if(pwd1.val()){
		r = pwd1.val() === pwd2.val();
		if(!r){
			$("input[name=pwd]").css('color' , 'red');
			$("input[name=rpwd]").css('color' , 'red');
		}
		else{
			$("input[name=pwd]").css('color' , 'green');
			$("input[name=rpwd]").css('color' , 'green');
		}
	}
	return r;
}

//validateRegistrationForm
function vRF(form){
	var valid;
	$('#msg').html("");
	valid = true;
	if(!vE(form.email)){
		$('#msg').append("<li>Invalid Email</li>");
		valid = false;
	}
	if(!vN(form.name)){
		$('#msg').append("<li>Invalid Name</li>");
		valid = false;
	}
	if(!vPM()){
		$('#msg').append("<li>Password does not match</li>");
		valid = false;
	}
	if(form.pwd.value.length < 6 || form.pwd.value.length > 30){
		$('#msg').append("<li>Password must contain 6 to 30 characters</li>");
		valid = false;
	}
	if(form.cid.value === '0'){
		$('#msg').append("<li>No College selected</li>");
		valid = false;
	}
	if(!form.sex.value){
		$('#msg').append("<li>No Gender selected</li>");
		valid = false;
	}
	return valid;
}
