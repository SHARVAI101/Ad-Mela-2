<?php

session_start();

include 'dbh.php';

// echo "ho";

// if(isset($_POST['submit']))
// {
// 	echo "yo";
// }

$websitename=$_POST['wname'];
$wdomain=$_POST['wdomain'];
$desc=$_POST['desc'];
$pviews=$_POST['pviews'];
$lmpviews=$_POST['lmpviews'];
$height=$_POST['height'];
$width=$_POST['width'];
$cost=$_POST['cost'];
$wbtype=$_POST['wbtype'];
$adtype=$_POST['adtype'];
// $fileToUpload1=$_POST['fileToUpload1'];
// $fileToUpload2=$_POST['fileToUpload2'];
// $fileToUpload3=$_POST['fileToUpload3'];

// echo $websitename.'<br>';
// echo $wdomain.'<br>';
// echo $desc.'<br>';
// echo $pviews.'<br>';
// echo $lmpviews.'<br>';
// echo $height.'<br>';
// echo $width.'<br>';
// echo $cost.'<br>';
// echo $wbtype.'<br>';
// echo $adtype.'<br>';
// echo $fileToUpload1.'<br>';
// echo $fileToUpload2.'<br>';
// echo $fileToUpload3.'<br>';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

//get website type
$sql00="SELECT wtid FROM website_type WHERE wbtype='$wbtype'";
$result00=mysqli_query($conn,$sql00);
$row00=mysqli_fetch_assoc($result00);
$wtid=$row00['wtid'];

//update website type table
$sql000="UPDATE website_type SET totalWebsites=totalWebsites+1 WHERE wtid='$wtid'";
$result000=mysqli_query($conn,$sql000);

//insert into websites table
$sql0="INSERT INTO websites (websiteName,websiteDomain,ownerId,websiteType,websiteDescription,pageviews,pg_lastmonth) VALUES ('$websitename','$wdomain','$userId','$wtid','$desc','$pviews','$lmpviews')";
$result0=mysqli_query($conn,$sql0);

$website_Id = $conn->insert_id;

//get ad type
$sql00="SELECT tid FROM ad_type WHERE adtype='$adtype'";
$result00=mysqli_query($conn,$sql00);
$row00=mysqli_fetch_assoc($result00);
$tid=$row00['tid'];

//update ads type table
$sql000="UPDATE ad_type SET totalWebsites=totalWebsites+1 WHERE tid='$tid'";
$result000=mysqli_query($conn,$sql000);

// insert into ads table
$sql="INSERT INTO ads (websiteId, websiteOwnerId, websiteType, width, height, type, status, cost, favourites) VALUES ('$website_Id','$userId','$wtid','$width','$height','$tid',0,'$cost',0)";
$result=mysqli_query($conn,$sql);

$ad_Id = $conn->insert_id;	

// $ad_Id=2;

$file_name=$_FILES['fileToUpload1']['name'];//gets the name of the meme(that is the name that was there during uploading the meme)
$ext = pathinfo($file_name, PATHINFO_EXTENSION);//this amazing function gets the extension of the image(meme) file e.g. "jpg","png" without the dot before the extension i.e., ".jpg",".png"..this dot has to be added later on

if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "gif" )
{
	
	$file_type=$_FILES['fileToUpload1']['type'];//gets file type
								
	$file_tmp_name=$_FILES['fileToUpload1']['tmp_name'];//gets the temporary location where the meme is saved before it is moved to the desired directory

	$filepath1="ads/".$ad_Id."_1".".$ext";
	move_uploaded_file($file_tmp_name, $filepath1);

	$file_name=$_FILES['fileToUpload2']['name'];//gets the name of the meme(that is the name that was there during uploading the meme)
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);//this amazing function gets the extension of the image(meme) file e.g. "jpg","png" without the dot before the extension i.e., ".jpg",".png"..this dot has to be added later on

	if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "gif" )
	{
		
		$file_type=$_FILES['fileToUpload2']['type'];//gets file type
									
		$file_tmp_name=$_FILES['fileToUpload2']['tmp_name'];//gets the temporary location where the meme is saved before it is moved to the desired directory

		$filepath2="ads/".$ad_Id."_2".".$ext";
		move_uploaded_file($file_tmp_name, $filepath2);

		$file_name=$_FILES['fileToUpload3']['name'];//gets the name of the meme(that is the name that was there during uploading the meme)
		$ext = pathinfo($file_name, PATHINFO_EXTENSION);//this amazing function gets the extension of the image(meme) file e.g. "jpg","png" without the dot before the extension i.e., ".jpg",".png"..this dot has to be added later on

		if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "gif" )
		{
			
			$file_type=$_FILES['fileToUpload3']['type'];//gets file type
										
			$file_tmp_name=$_FILES['fileToUpload3']['tmp_name'];//gets the temporary location where the meme is saved before it is moved to the desired directory

			$filepath3="ads/".$ad_Id."_3".".$ext";
			move_uploaded_file($file_tmp_name, $filepath3);

			$sql5="UPDATE ads SET imgdst1='$filepath1',imgdst2='$filepath2',imgdst3='$filepath3' WHERE aid='$ad_Id'";
			$result5=mysqli_query($conn,$sql5);

			echo $ad_Id;
		}
		else
		{
			echo 'extension error 3';
		}
	}
	else
	{
		echo 'extension error 2';
	}
}
else
{
	echo 'extension error 1';
}

// header("LOCATION: adlisting.php?id=".$ad_Id);

