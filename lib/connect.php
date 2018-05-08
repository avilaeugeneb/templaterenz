<?php


//Required Parameters Definitions
$hostname = 'localhost'; // 127.0.0.1
$username = 'root';
$password = '';
$db_name = 'kraff_beer_schema';

//Create a connection to DB
$conn = mysqli_connect($hostname,$username,$password,$db_name);

//Test DB connection

// if(!$conn){
// 	die('Connection failed: '. mysqli_error($conn));
// }
// else{
// 	echo 'Connection Successful.';
// }