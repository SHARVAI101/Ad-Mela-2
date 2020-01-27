<?php

session_start();
// echo "yo";
// echo $_SESSION['id'];
if(isset($_SESSION['id']))
{
// echo "ho";
include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);
?>

<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script src="general.js"></script>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
	a,a:hover{
		text-decoration: none;
	}
	*{
		font-family: 'Open Sans', sans-serif;
	}
	/*.navbar {
		overflow: hidden;
		background-color: #1B9CFC;
		padding-bottom:5px;
	}
	
	.nav-bar-link{
		color:#fff;
		text-align:center;
	}
	.nav-bar-link:hover{
		color:#fff;
	}
	.header{
		text-align:center;
		border-bottom:1px solid;
		box-shadow: 2px 2px 18px #222f3e;
		position:fixed;
		height:100px;
		background:#222f3e;
		z-index:10;
		color:white;
	}
	.nav-bar-link-box{
		width:25%;
		text-align:center;
		color:white;
	}
	.nav-bar-link-box:hover{
		background-color: #B33771;
	}*/
	
	.header-right {
        /*float: right;*/
        position:absolute;
        right:40px;
    }

    .header-up-dp{
        width:40px;
        height:40px;
        border-radius: 50%;
        margin-left:10px;
    }
    .header-ad-icon{
        position:relative;
        /*right:120px;*/
        width:40px;
        height:40px;
        /*top:12px;*/
        /*float:left;*/
        margin-top:20px;
        padding:5px;
        padding-left:10px;
    }
    .header-notif-icon{
        /*float:left;*/
        padding:5px;
    }

	.outer-container{
        padding:0px;
        width:100%;
        top:97px;
        position:relative;        
    }

   input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .signin-box{
        width:600px;
        border-radius:15px;
        display:block;
        margin:0 auto;
        border:1px solid #cccccc;
    }

    button {
        background-color: #666;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .signin-box-background{
        /*background-color: rgba(42, 51, 56, 0.7);*/
    }
    .signinbox-input-background{
        background-color: rgba(79, 68, 89, 0.2);
        color:#fff;
        border-color: rgba(99, 145, 170, 0.7);
    }

    .row{
    	width:100%;
    	margin:0px;
    }

    .ad-listing-heading{
    	text-align:center;
    	padding-top:10px;
    	color:#192a56;
    }

    .website-info-textarea{
    	width:100%;
    }
    .info-heading{
    	text-align:center;
    	font-size:20px;
    	width:100%;
    }

    .small-textbox{
    	width: 100%;
    	margin-bottom: 6px;
    	float:left;
    	border-radius: 5px;
    	padding: 5px;
    	border: 1px solid #ccc;
    }

    .w3-modal{
    	margin-top: 10px;
    	/*background: #606266;*/
    }

    input[type=submit] {
	    padding:10px 35%; 
	    background:#0fb9b1; 
	    border:0 none;
	    color:white;
	    margin-top:10px;
	    cursor:pointer;
	    -webkit-border-radius: 5px;
	    border-radius: 5px; 
	    margin-left:auto;
	    margin-right:auto;
	}

	#upload-image-button{
		padding:10px 35%; 
	    background:#2ecc71; 
	    border:0 none;
	    color:white;
	    margin-top:10px;
	    cursor:pointer;
	    -webkit-border-radius: 5px;
	    border-radius: 5px; 
	    margin-left:auto;
	    margin-right:auto;
	    display:block;
	    text-align:center;
	    width:100%;
	}

	#wrapper
	{
 		text-align:center;
 		margin:0 auto;
 		padding:0px;
		width:995px;
	}
	#output_image1
	{
 		max-width:250px;
	}

	#output_image2
	{
	 max-width:250px;
	}

	#output_image3
	{
	 max-width:250px;
	}

	</style>

	<title>Ad-Mela</title>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</head>
	
<!-- <script>
	function validateForm() {
	var x = document.forms["myForm"]["wname"].value;
		if (x == "" || x.length>25) {
				alert("Enter a valid Website name with less than 25 characters");
				return false;
		}
	var x = document.forms["myForm"]["wdomain"].value;
		if (x == "" || x.length>50) {
				alert("Enter a valid Website Domain");
				return false;
		}
	x = document.forms["myForm"]["desc"].value;
		if (x == "") {
				alert("Give some information about your website");
				return false;
	}
	x = document.forms["myForm"]["pviews"].value;
		if (x<0 || x=="") {
				alert("Enter page views input as positive number");
				return false;
	}
	x = document.forms["myForm"]["lmpviews"].value;
		if (x<0 || x=="") {
				alert("Enter last month page views input as positive number");
				return false;
	}
	x = document.forms["myForm"]["length"].value;
		if (x<1 || x=="") {
				alert("Enter valid length of Ad-space");
				return false;
	}
	x = document.forms["myForm"]["width"].value;
		if (x<1 || x=="") {
				alert("Enter valid width of Ad-space");
				return false;
	}
	x = document.forms["myForm"]["cost"].value;
		if (x<0 || x=="") {
				alert("Enter valid cost for advertisement");
				return false;
	}
}
</script> -->

<script type='text/javascript'>
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
	
<body>
	
<!-- <div class="container-fluid header">
	<a href="#"><h1 style="padding-top:10px;color:white">Ad-Mela</h1></a>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid" align="left">
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="index.php">Home</a>
			</div>
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="categorypage.php">Categories</a>
			</div>
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="advertise.php">Post Ad</a>
			</div>
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="signin.php">Sign in</a>
			</div>           
		</div>
	</nav>
</div> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">AdMela</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse header-boy" id="navbarNavAltMarkup">
        <div class="navbar-nav" style="float:left">
            <a class="nav-item nav-link " href="categorypage.php">Categories <!-- <span class="sr-only">(current)</span> --></a>
            <!-- <a class="nav-item nav-link" href="#"></a>-->
            <a class="nav-item nav-link" href="logout.php">Log Out</a> 
        </div>
        <!-- <a href="logout.php" class="nav-item nav-link" style="color:white">Log Out</a> -->
        <div class="header-right">
            <!-- <a href="advertise.php" class="header-notif-icon">
                <i style="font-size:30px;color:white" class="far fa-bell"></i>
            </a> -->
            <a href="advertise.php" class="header-ad-icon">
                <i style="font-size:30px;color:white" class="fas fa-upload"></i>
            </a>
            <a href="user_profile.php" class="header-dp-icon">
                <img src="<?php echo $_SESSION['profilePicLocation']; ?>" class="header-up-dp">
            </a>
        </div>
        
    </div>
</nav>

<div class="outer-container container-fluid" style="padding-top:0px"> 
	<div class="signin-box signin-box-background">
		<form class="ad_listing_form" name="ad_listing_form" method="post" multipart/formdata>
			<div class="container">

				<h1 class="ad-listing-heading">List Ad Space</h1>			
			
				<div class="row">      
					<input type="text" required="true" name="wname" placeholder="Website Name" required>      
				</div> 
				
				<div class="row">      
					<input type="text" name="wdomain" placeholder="Website Domain (eg: www.google.com)" required>
				</div> 
				<hr>
				<div class="row">      
					<h2 class="info-heading">Website Type</h2>
				</div> 
				<div class="row">      
					<select class="form-control" id="website_type" name="wbtype">
					    <option value="Social">Social</option>
					    <option value="Educational">Educational</option>
					    <option value="Entertainment">Entertainment</option>
						<option value="Utility">Utility</option>
						<option value="Community">Community</option>
						<option value="News">News</option>
						<option value="Gaming">Gaming</option>
					</select>
				</div> 
				<hr>	
				<div class="row">      
					<h2 class="info-heading">Website Info</h2>
				</div> 

				<div class="row">      
					<textarea class="website-info-textarea" placeholder="Enter basic info like what's the website about, whom does it cater?" style="height:100px;resize:none" name="desc" required></textarea>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<input class="small-textbox" placeholder="Total Page Views" name="pviews" type="number" required> 
					</div>
					<div class="col-md-6">
						<input class="small-textbox" placeholder="Page Views Last Month" name="lmpviews" type="number" required>
					</div>
				</div>
				<hr>
				<div class="row">
					<h2 class="info-heading">Ad Details</h2>
				</div>
				
				<div class="row">  
					<div class="col-md-6">
						<input class="small-textbox" name="height" type="number" placeholder="Height (in cm)" required>      
					</div>
					<div class="col-md-6">
						<input class="small-textbox" name="width" type="number" placeholder="Width (in cm)" required>      
					</div>
				</div>
				<hr>
				<div class="row">
					<h2 class="info-heading">Ad Type</h2>
				</div>
				<div class="row">
					<select class="form-control" id="ad_type" name="adtype">
					    <option value="Banner">Banner</option>
					    <option value="Pop-Up">Pop-Up</option>
					    <option value="Video">Video</option>
						<option value="Referral Link">Referral Link</option>
					</select>
				</div>
				<hr>
				<div class="row">      
					<h2 class="info-heading">Cost</h2>
				</div>

				<div class="row">      
					<input style="width: 100%;margin-bottom: 6px;float:left;border-radius: 5px;padding: 5px;border: 1px solid #ccc;" name="cost" type="number" placeholder="in $/day" required>      
				</div>

				
				<hr>
				<a onclick="document.getElementById('id01').style.display='block'" id="upload-image-button">Upload Images</a>
				<hr>
				<div class="row">
					<input class="listAd" id="listAd" name="listAd" type="submit" value="List Advertise">
				</div>
				<br>
			</div>	

			<div id="id01" class="w3-modal">
				    <div class="w3-modal-content" style="padding:50px">
				      	<div class="w3-container">
					        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					        
					        <div class="row">
					        	<p style="width: 100%;text-align: center;font-size:20px">Upload 3 Screenshots</p>
					        </div>
					        <br>
					        <div class="row">
								<div class="col-md-4">
									<input type="file" name="fileToUpload1" id="fileToUpload" onchange="preview_image1(event)" required>
									<img id="output_image1"/>
								</div>
								<div class="col-md-4">
									<input type="file" name="fileToUpload2" id="fileToUpload" onchange="preview_image2(event)" required>
									<img id="output_image2"/>
								</div>
								<div class="col-md-4">
									<input type="file" name="fileToUpload3" id="fileToUpload" onchange="preview_image3(event)" required>
									<img id="output_image3"/>
								</div>
					        </div>
				     	</div>
				    </div>
			  	</div>

			<p id="error" style="color:red;text-align:center;width:100%;font-size:20px"></p>
					
		</form>	
	</div>
	<br><br>
</div>  
	
	

	
	</body>
</html>

<?php

}
else
{
	header("LOCATION: signup.php");
}

?>