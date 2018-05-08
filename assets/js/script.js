$(document).ready(function(){

	$('#register').prop('disabled',true);

	// Check if email exists
	$('#email').on('blur',function(){

		var email =$(this).val();
		
			$.ajax({
				url:"./lib/validate_email.php",
				method:"POST",
				data:{"email": email}
			}).done(function(data){
				$('#mail_avail').html(data);
			});
	});

	//Check if username exists
	$('#username').on('keyup',function(){

		var uname =$(this).val();
		
			$.ajax({
				url:"./lib/validate_user.php",
				method:"POST",
				data:{"uname": uname}
			}).done(function(data){
				$('#user_avail').html(data);
			});

	});

	//Confirm password
	$('#confirmpw').on('keyup',function(){

		var pword = $('#password').val();
		var confirmpw = $('#confirmpw').val();
		if(confirmpw != ''){
			if(pword==confirmpw){
				$('#match').html('Password Matched');
			}
			else{
				$('#match').html('Password Mismatched');
			}
		}else{
			$('#match').html(' ');
		}

	});

	//Check if password length is > 8 characters
	$('#password').on("blur",function(){
		var pass = $(this).val();
		if(pass.length < 8 && pass.length >0){
			$('#pwlength').html('Pasword too short');
		}
		else{
			$('#pwlength').html('');
		}
	});

	//Disable spaces for input form
	$("form#registerform div input").on("keydown",function(e){
		if (e.which === 32)
	      return false;
	});

	//Checks if all input are valid , toggles the submit button
	$("form#registerform div input").on("keyup",function(){
		var usermsg =  $('#user_avail').html();
		var emailmsg = $('#mail_avail').html();
		var pwmsg = $('#pwlength').html();
		var confmsg = $('#match').html();  

		if((usermsg=='User available') 
			&& (emailmsg == 'Email available') 
			&& (pwmsg=='') 
			&& (confmsg=='Password Matched')){
			$('#register').prop('disabled',false);
		}
		else{
			$('#register').prop('disabled',true);
		}
	});

	$('#login_username,#login_password').on("keyup",function(){
		var login_username = $('#login_username').val();
		var login_password = $('#login_password').val();

		$.ajax({
			url : "./lib/validate_login.php",
			method : "POST",
			data : {"username":login_username,"password":login_password}
		}).done(function(data){
			$('#errormsg').html(data);
		});

	});


});
