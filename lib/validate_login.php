<?php
require_once 'connect.php';

$loginid = $_POST['username'];
$loginpw = sha1($_POST['password']);

$login_qry = "SELECT * FROM users WHERE username ='$loginid' AND password = '$loginpw'";

$result = mysqli_query($conn,$login_qry);

if(mysqli_num_rows($result)<1){
	echo "Invalid Credentials";
}

mysqli_close($conn);