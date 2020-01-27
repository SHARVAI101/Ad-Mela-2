<?php

include 'dbh.php';

if (isset($_POST['login-button'])) {

	$username=mysqli_real_escape_string($conn,$_POST['uname']);
	$password=mysqli_real_escape_string($conn,$_POST['psw']);

	//echo $username.','.$password;

	// $hash=password_hash($password,PASSWORD_DEFAULT);
	// echo $hash;
	
	$sql="SELECT uid,pwd FROM users WHERE username='$username'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);

	// echo $row['pwd'];

	// echo '~'.password_verify($password,$row['pwd']).'~';

	if(mysqli_num_rows($result)>0 && password_verify ( $password , $row['pwd'] )){

		session_start();
		
		$_SESSION['id']=$row['uid'];
		$_SESSION['username']=$username;

		$id=$row['uid'];

		$sql3="SELECT profilePicLocation FROM users WHERE uid='$id'";
		$result3=mysqli_query($conn,$sql3);
		$row3=mysqli_fetch_assoc($result3);

		$_SESSION['profilePicLocation']=$row3['profilePicLocation'];
		// echo $_SESSION['id'];
		// echo $_SESSION['username'];

		header("LOCATION: user_profile.php");		
	}
	else{
		echo "Invalid";
	}
}
?>