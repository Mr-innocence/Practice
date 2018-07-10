<?php

include_once 'connection.php';
$userName = mysqli_real_escape_string($conn, $_POST['userName']);
$userPw = mysqli_real_escape_string($conn, $_POST['userPw']);
$email = mysqli_real_escape_string($conn,$_POST['email']）;

$sql_insert = "INSERT into userInfo(userPw, userName, email) VALUES ('?, ?, ?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql_insert)){
	echo "SQL error";
}else{
	mysqli_stmt_bind_param($stmt, "sss", $userName, $userPw, $email);
	mysqli_stmt_execute($stmt);
}

header("Location: ../login.php?signup = success");