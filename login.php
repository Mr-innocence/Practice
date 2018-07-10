<?php

include_once 'includes/connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form  method = "POST" action="includes/signup.php">
		<input type = "text" name = "userName" placeholder="userName">
		<br>
		<input type = "password" name = "userPw" placeholder="userPw">
		<br>
		<input type = "email" name = "email" placeholder="email">
		<br>
		<button type = "submit" name = "signUp">Sign Up</button>	
	</form>


	<?php
	$sql = "SELECT * FROM userinfo";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['userName'];
		}
	}else{
		echo 'There is no selected data';
	}




?>
</body>
</html>
