<?php
require_once 'connect.php';

if(isset($_POST['email']) && !empty($_POST['email'])){
	$email = $_POST['email'];
	$email_qry = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($conn,$email_qry);

	if(mysqli_num_rows($result)>0){
		echo "Email already exists";
	}
	else{
		echo "Email available";
	}
}
