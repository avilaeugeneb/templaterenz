<?php

require_once 'connect.php';

$email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
$uname =  htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
$pword =  htmlspecialchars(mysqli_real_escape_string($conn,sha1($_POST['password'])));

$insert_user = "INSERT INTO users(userEmail,userUid,userPassword) VALUES('$email','$uname','$pword')";

$result = mysqli_query($conn,$insert_user);

header("location: ../login.php");

mysqli_close($conn);

INSERT INTO users(userEmail,userUid,userPassword) VALUES('1sdahndma@mail','testuser1',sha1('123456789'));