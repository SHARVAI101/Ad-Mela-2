<?php

session_start();

include 'dbh.php';

$ad_Id=$_GET['ad_Id'];

?>

<!doctype html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- <script src="general.js"></script> -->
	
	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
	a,a:hover{
		text-decoration: none;
	}
	*{
		font-family: 'Open Sans', sans-serif;
	}
	
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
		/*top:97px;*/
		margin-top:50px;
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

	.adlisting-heading{
		font-size:40px;
		margin-top:50px;
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
	.listing-ss-div{
		padding:15px;
		padding-bottom:40px;
	}
	.website-name{
		text-align:center;
		font-size:35px;
		margin-top:10px;
	}
	.listing-info-div{
		margin:15px;
		border:1px solid #cccccc;
		height:100%;
		margin-bottom:40px;
		border-radius:5px;
	}
	.website-description-heading{
		font-size:20px;
		margin-left:10px;
		color:#2e86de;
	}
	.website-description{
		font-size:15px;
		padding-left:10px;
		padding-right:10px;
	}
	.website-category{
		font-size:20px;
		margin-left:10px;
		color:#2e86de;
	}
	.get-contacts-link{
		background-color:#ee5253;
		color:#fff;
		padding:10px;
		width:200px;
		display:block;
		margin:0 auto;
		/*margin-top:50px;*/
		cursor:pointer;
	}
	</style>
	<title>Ad Listing</title>
	
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

<!-- <div class="container-fluid header">
	<a href="#"><h1 style="padding-top:10px;color:white">Ad-Mela</h1></a>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid" align="left">
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="index.html">Home</a>
			</div>
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="categorypage.html">Categories</a>
			</div>
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="advertise.html">Post Ad</a>
			</div>
			<div class="nav-bar-link-box">
				<a class="nav-bar-link" href="signin.html">Sign in</a>
			</div>			     
		</div>
	</nav>
</div> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="index.php">AdMela</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse header-boy" id="navbarNavAltMarkup" style="">
		<div class="navbar-nav" style="float:left">
			<a class="nav-item nav-link " href="categorypage.php">Categories <!-- <span class="sr-only">(current)</span> --></a>
			<!-- <a class="nav-item nav-link" href="#"></a>
			<a class="nav-item nav-link" href="#">Pricing</a> -->
		</div>
		<a href="logout.php" class="nav-item nav-link" style="color:white">Log Out</a>
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


<div class="outer-container container-fluid"> 
	<!-- <div class="row">
		<div style="width:100%">
			<h1 class="adlisting-heading" style="text-align:center">Website Ad Listing</h1>
		</div>
	</div> -->

	<?php

	$sql="SELECT * FROM ads WHERE aid='$ad_Id'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);

	$websiteId=$row['websiteId'];

	$adtype=$row['type'];

	$sql0="SELECT * FROM ad_type WHERE tid='$adtype'";
	$result0=mysqli_query($conn,$sql0);
	$row0=mysqli_fetch_assoc($result0);	

	$sql1="SELECT * FROM websites WHERE wid='$websiteId'";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);

	$websiteType=$row1['websiteType'];
	$ownerId=$row1['ownerId'];

	$sql2="SELECT * FROM website_type WHERE wtid='$websiteType'";
	$result2=mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_assoc($result2);

	$sql3="SELECT * FROM users WHERE uid='$ownerId'";
	$result3=mysqli_query($conn,$sql3);
	$row3=mysqli_fetch_assoc($result3);

	?>

	<div class="row">
		<div class="col-md-7">
			<div class="listing-ss-div">
				<!-- <img style="width:100%" src="http://natbg.com/wp-content/uploads/2016/09/other-autumn-park-serenity-colors-walk-trees-fall-nature-rest-beautiful-foliage-bench-season-leaves-full-hd-wallpaper.jpg"> -->
				
				<div id="demo" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>
					  
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
						  	<img style="width:100%;height:500px" src="<?php echo $row['imgdst1']; ?>" width="1100" height="500">
						</div>
						<div class="carousel-item">
						  	<img style="width:100%;height:500px" src="<?php echo $row['imgdst2']; ?>" width="1100" height="500">
						</div>
						<div class="carousel-item">
						  	<img style="width:100%;height:500px" src="<?php echo $row['imgdst3']; ?>" width="1100" height="500">
						</div>
					</div>
					  
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>

			</div>
		</div>
		<div class="col-md-5">
			<div class="listing-info-div">
				<h2 class="website-name"><?php echo $row1['websiteName']; ?></h2>
				<h3 class="website-category">DOMAIN: <span style="color:black"><?php echo $row1['websiteDomain']; ?></span></h3>
				<p class="website-category">WEBSITE TYPE: <span style="color:black"><?php echo $row2['wbtype']; ?></span></p>
				<?php

				if($row['status']==0)
				{
					?>
					<p class="website-category">STATUS: <span style="color:black">Available</span></p>
					<?php
				}
				else
				{
					?>
					<p class="website-category">STATUS: <span style="color:black">Not-Available</span></p>
					<?php
				}

				?>				
				<div class="website-description-div">
					<h3 class="website-description-heading">DESCRIPTION:</h3>
					<p class="website-description"><?php echo $row1['websiteDescription']; ?></p>
				</div>			
				<p class="website-category">Ad Category: <span style="color:black"><?php echo $row0['adtype']; ?></span></p>
				<p class="website-category">Page Views Total: <span style="color:black"><?php echo $row1['pageviews']; ?></span></p>
				<p class="website-category">Page Views Last Month: <span style="color:black"><?php echo $row1['pg_lastmonth']; ?></span></p>
				<p class="website-category">Cost: <span style="color:black">$<?php echo $row['cost']; ?> / Day</span></p>
				<div style="width:210px;margin:0 auto;display:block" id="adlist-action-div">
					<!-- <button class="get-contacts-link" style="display:inline">Add to Favourites</button> -->
					<button class="get-contacts-link" data-toggle="modal" data-target="#myModal">Contact Website Owner</button>
				</div>	

  				<!-- Modal -->
  				<div class="modal fade" id="myModal" role="dialog">
	    			<div class="modal-dialog">
	    
			      		<!-- Modal content-->
				      	<div class="modal-content">
					        <div class="modal-header">					          	
					          	<h4 class="modal-title"><?php echo $row3['username']; ?></h4>
					          	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        </div>
					        <div class="modal-body">
					          	<p>EMAIL: (<?php echo $row3['email']; ?>)  <a href="mailto:<?php echo $row3['email']; ?>?Subject=Rent%20Ad%20Space" target="_top">Send Mail</a></p>
					        </div>
					        <div class="modal-footer">
					          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
				      	</div>
			      
			    	</div>
		  		</div>

			</div>
		</div>
	</div>
</div>

</body>
</html>