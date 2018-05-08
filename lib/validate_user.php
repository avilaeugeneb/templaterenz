<?php
require_once 'connect.php';

if(isset($_POST['uname']) && !empty($_POST['uname'])){
	$uname = $_POST['uname'];
	$query = "SELECT * FROM users WHERE username = '$uname'";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)>0){
		echo "User already exists";
	}
	else{
		echo "User available";
	}
}
