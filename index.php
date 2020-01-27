<?php 

session_start();

?>
<!doctype html>
 <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
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
	.info-box-element{
		width:70px;
		display:block;
		margin:0 auto;
	}
	
	.info-headings{
		text-align:center;
	}
	
	.info-box-info{
		text-align:center;
	}
	

	.index-heading1{
		font-size:50px;
		margin-top:130px;
	}

	.index-heading2{
		font-size:50px;
		margin-top:60px;
	}

	.info-box{
		display:inline;
		width:300px;
	}
	.page1-info{
		width:360px;
		display:block;
		margin:0 auto;
	}

	.btn{
		width:100%;
		height:100%;
		padding-top:35px;
	}
	</style>
	<title>Ad-Mela</title>
</head>
<body>
<!--   
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.html">
			<img src="logo.png" style="display: inline-block;width:50px;height:60px">
			<span style="display: inline-block;">Ad-Mela</span>
		</a>   
	</div>	
</nav> -->

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
			<?php

			if(!isset($_SESSION['id']))
			{
				?>
				<div class="nav-bar-link-box">
					<a class="nav-bar-link" href="signin.php">Sign in</a>
				</div>	
				<?php
			}
			else
			{
				?>
				<div class="nav-bar-link-box">
					<a class="nav-bar-link" href="signin.php"><?php echo $_SESSION['username']; ?></a>
				</div>
				<?php
			}
			?>		     
		</div>
	</nav>
</div>


<div class="outer-container container-fluid"> 
	<div class="container" style="height:90vh">
		<div class="row">
			<div style="width:100%">
				<h1 class="index-heading1" style="text-align:center">What is Ad-Mela?</h1>
			</div>
		</div>
		<br>
		<div class="row">
			<p style="text-align:center">Ad-Mela is a platform for website developers  who can list their available ad-spaces on our website. And advertisers can choose from variety of websites to advertise themselves</p>
		</div>
	  	<br><br>

		<div class="row">
			<div class="col-md-6 info-box">
				<i class="fas fa-users-cog fa-5x info-box-element"></i>
				<h3 class="info-headings">Website Developer</h3>
				<p class="info-box-info page1-info">One who has his own website and has ad-spaces for lease</p>
			</div>
			<div class="col-md-6 info-box">
				<i class="fas fa-user-tie fa-5x info-box-element"></i>
				<h3 class="info-headings">Advertiser</h3>
				<p class="info-box-info page1-info">One who wants to give an advertisement and wishes to find perfect ad space to advertise</p>
			</div>
		</div>
	</div>
	  
	<div class="container" style="height:100vh">
		<div class="row">
			<div style="width:100%">
				<h2 class="info-headings index-heading2" style="text-align:center">For Website Developers</h2>
			</div>
		</div>
		<div class="row"  style="margin-top:20px">
			<p class="info-box-info">He can apply for multiple ad spaces in his website. He just needs to register and give details about his website and the ad space he wants to post. Then it gets LIVE om our site!</p>
		</div>
	  	
		<div class="row" style="margin-top:50px">
			<div style="width:100%">
				<h2 style="text-align:center">BENEFITS</h2>
			</div>
		</div>
		<div class="row" style="margin-top:50px">
			<div class="col-md-3">
				<i class="fas fa-list-ul fa-3x info-box-element" style="width:48px"></i>
				<p class="info-box-info" style="margin-top:10px">List Multiple Ads</p>
			</div>
			<div class="col-md-3">
				<i class="fas fa-users fa-3x info-box-element" style="width:60px"></i>
				<p class="info-box-info" style="margin-top:10px">Get popular among advertisers</p>
			</div>
			<div class="col-md-3">
				<i class="fas fa-file-contract fa-3x info-box-element" style="width:36px"></i>
				<p class="info-box-info" style="margin-top:10px">Sell your Ads easily and swiftly</p>
			</div>
			<div class="col-md-3">
				<i class="fas fa-address-card fa-3x info-box-element" style="width:54px"></i>
				<p class="info-box-info" style="margin-top:10px">Direct contact and payment with advertiser</p>
			</div>
		</div>
	</div>
	  
	<div class="container" style="height:100vh">
		<div class="row">
			<div style="width:100%">
				<h2 class="info-headings index-heading2" style="text-align:center">For Advertisers</h2>
			</div>
		</div>
		<div class="row">
			<p class="info-box-info">He is a person or entrepreneur who wants proper suitable website to advertise his content. On our website he can find variety of Ad-spaces based on cost, size and ad-types!</p>
		</div>
	  
		<div class="row" style="margin-top:50px">
			<div style="width:100%">
				<h2 class="info-headings">BENEFITS</h2>
			</div>
		</div>
		<div class="row" style="margin-top:80px">
			<div class="col-md-3">
				<i class="fas fa-list-ul fa-3x info-box-element"></i>
				<p class="info-box-info" style="margin-top:10px">Swiftly find Ads</p>
			</div>
			<div class="col-md-3">
				<i class="fas fa-filter fa-3x info-box-element"></i>
				<p class="info-box-info" style="margin-top:10px">Unique advertising filtering system</p>
			</div>
			<div class="col-md-3">
				<i class="fas fa-passport fa-3x info-box-element"></i>
				<p class="info-box-info" style="margin-top:10px">Get all website stats in one click</p>
			</div>
			<div class="col-md-3">
				<i class="fas fa-address-card fa-3x info-box-element"></i>
				<p class="info-box-info" style="margin-top:10px">Direct contact and payment with Website(Ad-space) owner</p>
			</div>
		</div>
	</div>
	  
	<div class="container" style="height:85vh">
		<div class="row">
			<div style="width:100%">
				<h2 class="info-headings index-heading2" style="text-align:center">Start Today!</h2>
			</div>
		</div>
		<div class="row" style="margin-top:150px;height:100px">
			<div class="col-md-6">
				<a href="categorypage.php" class="btn btn-primary" role="button">Buy an Ad</a>  
			</div>
			<div class="col-md-6">
				<a href="advertise.php" class="btn btn-success" role="button">Sell an Ad</a>
			</div>  
		</div>
	</div>
</div>
  
  
  
	

	
	
	
	
	
	
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>