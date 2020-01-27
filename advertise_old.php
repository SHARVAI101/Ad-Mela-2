<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
	a,a:hover{
		text-decoration: none;
	}
	*{
		font-family: 'Open Sans', sans-serif;
	}
	.navbar {
		overflow: hidden;
		background-color: #1B9CFC;
		/*font-family: Arial;*/
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
	</style>

	<title>Ad-Mela</title>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
	
<script>
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
</script>
	
<body>
	
<div class="container-fluid header">
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
</div>

<div class="outer-container container-fluid" style="padding-top:50px"> 
	<div class="signin-box signin-box-background">
		<form name="ad_listing_form" method="post">
			<div class="container">

				<h1 class="ad-listing-heading">List Ad Space</h1>			
			
				<div class="row">      
					<input type="text" required="true" name="wname" placeholder="Website Name">      
				</div> 
				
				<div class="row">      
					<input type="text" name="wdomain" placeholder="Website Domain (eg: www.google.com)">
				</div> 
				<hr>	
				<div class="row">      
					<h2 class="info-heading">Website Info</h2>
				</div> 

				<div class="row">      
					<textarea class="website-info-textarea" placeholder="Enter basic info like what's the website about, whom does it cater?" style="height:100px;resize:none" name="desc"></textarea>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<input class="small-textbox" placeholder="Total Page Views" name="pviews" type="number"> 
					</div>
					<div class="col-md-6">
						<input class="small-textbox" placeholder="Page Views Last Month" name="lmpviews" type="number">
					</div>
				</div>
				<hr>
				<div class="row">
					<h2 class="info-heading">Ad Details</h2>
				</div>
				
				<div class="row">  
					<div class="col-md-6">
						<input class="small-textbox" name="length" type="number" placeholder="Length (in cm)">      
					</div>
					<div class="col-md-6">
						<input class="small-textbox" name="width" type="number" placeholder="Width (in cm)">      
					</div>
				</div>
				<hr>
				<div class="row">      
					<h2 class="info-heading">Cost</h2>
				</div>

				<div class="row">      
					<input style="width: 100%;margin-bottom: 6px;float:left;border-radius: 5px;padding: 5px;border: 1px solid #ccc;" name="cost" type="number" placeholder="in $/day">      
				</div>
				
				<div class="row">
					<input class="submit" name="submit" type="submit" value="List Advertise" onClick="validateForm();" >
				</div>
				<br>
			</div>			
		</form>	
	</div>
	<br><br>
</div>  
	
	
	</body>
</html>