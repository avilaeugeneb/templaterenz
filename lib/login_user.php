<?php
session_start();

require_once 'connect.php';

$uname = $_POST['username'];
$pword = sha1($_POST['password']);

$query = "SELECT * FROM users WHERE username = '$uname' AND password = '$pword'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
	foreach ($result as $row) {
		extract($row);
		$_SESSION['current_user'] = $username;
	}

	header("location: ../home.php");
}
else{
	$_SESSION['msg'] = "Invalid Credentials";
	header("location: ../login.php?invalidlogin");
}

mysql_close($conn);