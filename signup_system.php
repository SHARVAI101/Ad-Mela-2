<?php
if(isset($_POST['submit']))
{
		include_once 'dbh.php';

		$fname=mysqli_real_escape_string($conn,$_POST['firstname']);
		$lname=mysqli_real_escape_string($conn,$_POST['lastname']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['psw']);
		$hash=password_hash($password,PASSWORD_DEFAULT);
		$fullname=$fname." ".$lname;

		$sql = mysqli_query($conn,"SELECT username FROM users WHERE username='".$username."'");
		$result=mysqli_fetch_array($sql);
		$sql1 = mysqli_query($conn,"SELECT email FROM users WHERE email='".$email."'");
		$result1=mysqli_fetch_array($sql1);

		if(!empty($result))
		{
			echo "Username Already taken";		
		}
		else if(!empty($result1))
		{
			echo "Email address Already taken";
		}
		else
		{
			
			// $query = mysqli_query($conn,"insert into users(username,fullname,email,pwd,profilePicLocation) values ('$username', '$fullname', '$email', '$hash','user_dp/default.jpg')");
			// echo $query;

			// echo $fullname.','.$email.','.$username.','.$password.','.$hash;

			$sql2="INSERT INTO users (username,fullname,email,pwd,profilePicLocation) VALUES ('$username','$fullname','$email','$hash','user_dp/default.jpg')";
			$result2=mysqli_query($conn,$sql2);

			// echo "Succesfuel";

			session_start();

			$id = $conn->insert_id;

			$sql3="SELECT profilePicLocation FROM users WHERE uid='$id'";
			$result3=mysqli_query($conn,$sql3);
			$row3=mysqli_fetch_assoc($result3);

			$_SESSION['id']=$id;
			$_SESSION['username']=$username;
			$_SESSION['fullname']=$fullname;
			$_SESSION['profilePicLocation']=$row3['profilePicLocation'];

			// echo '<br>'.$_SESSION['id'].','.$_SESSION['username'].','.$_SESSION['fullname'].','.$_SESSION['profilePicLocation'];

			header("LOCATION: user_profile.php");
		}
	}
?>