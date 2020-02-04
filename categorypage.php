<?php

session_start();

include 'dbh.php';
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="general.js"></script>


	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
	a,a:hover{
		text-decoration: none;
	}
	*{
		font-family: 'Open Sans', sans-serif;
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
	
	.category-box{
		padding:0px;
		margin-top:5px;
		padding-left:50px;
		padding-right:50px;
		padding-top:100px;
		padding-bottom:100px;
		/*border:1px solid #cccccc;*/
		text-align:center;
		color:white;	
		border-radius:5px;					
	}	
	.category-box:hover{
		opacity: 0.5;
    	filter: alpha(opacity=40)				
	}
	
	

	@media only screen and (min-width: 768px) {
	    .left-nav{
			border-right: 1px solid #cccccc;
			height:100vh;
			position:fixed;
			background-color: #343a40;
			/*margin-top:-6px;*/
			color:white;
		}
		.categories-div{
			margin-left:230px;
		}
		.category-box{
			padding:0px;
			margin-top:5px;
			padding-left:50px;
			padding-right:50px;
			padding-top:120px;
			padding-bottom:120px;
			/*border:1px solid #cccccc;*/
			text-align:center;
			color:white;	
			border-radius:5px;					
		}	
		.header-right {
	        /*float: right;*/
	        position:absolute;
	        right:40px;
	    }
	}
	@media only screen and (min-width: 300px) {
	    .left-nav{
			border-right: 1px solid #cccccc;
			background-color: #343a40;
			color:white;
		}
	}
	

	#web1{
		background-image: url("https://png.pngtree.com/thumb_back/fw800/back_pic/00/14/98/695677d4bfd4ebf.jpg");
	}
	#web2{
		background-image: url("https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&h=350");
	}
	#web3{
		background-image: url("https://images.unsplash.com/photo-1498550744921-75f79806b8a7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b0f6908fa5e81286213c7211276e6b3d&w=1000&q=80");
	}
	.row{
		margin-left: 0;
  		margin-right: 0;
	}
	[class*="col-"],  /* Elements whose class attribute begins with "col-" */
	[class^="col-"] { /* Elements whose class attribute contains the substring "col-" */
	  padding-left: 7px;
	  padding-right: 5px;
	}
	</style>
</head>
<body>
	<!-- <div class="container-fluid header">
		<a href="index.php"><h1 style="padding-top:10px;color:white">Ad-Mela</h1></a>
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
				
				<?php

				if(isset($_SESSION['id']))
				{
					?>
					<a href="logout.php" class="nav-item nav-link">Log Out</a>
					<?php
				}
				?>
				<a class="nav-item nav-link" href="rss.php"><i class="fas fa-rss"></i> RSS</a>
				<a class="nav-item nav-link" href="mashup.php"><i class="fas fa-random"></i> Mashup</a>
			</div>
			<div class="header-right">
				<?php
				if(isset($_SESSION['id']))
				{
					?>
					<!-- <a href="advertise.php" class="header-notif-icon">
						<i style="font-size:30px;color:white" class="far fa-bell"></i>
					</a> -->
					<a href="advertise.php" class="header-ad-icon">
						<i style="font-size:30px;color:white" class="fas fa-upload"></i>
					</a>
					<a href="user_profile.php" class="header-dp-icon">
						<img src="<?php echo $_SESSION['profilePicLocation']; ?>" class="header-up-dp">
					</a>
					<?php
				}
				else
				{
					?>
					<a href="signup.php" class="nav-item nav-link" style="color:white">Sign Up | Log In</a>
					<?php
				}
				?>
			</div>
			
		</div>
	</nav>
	
	
	<div class="container-fluid outer-container">

		<div class="row">

			<div class="col-md-2 left-nav">	
				<div style="text-align:center;padding-top:20px">				
					<h2 style="font-size:27px">EXPLORE ADS<h2>					
				</div>
				
				<div>
					<!-- <p style="font-size:20px;text-align:center">Filters</p> -->
					<hr>
					<p style="font-size:15px;text-align:center">Website Type</p>
					<select id="wbtype" class="form-control" name="wbtype" onchange="webtype(this);">
						<option value="0" >All</option>
						<option value="1" >Social</option>
						<option value="2" >Educational</option>
						<option value="3" >Entertainment</option>
						<option value="4" >Utility</option>
						<option value="5" >Community</option>
						<option value="6" >News</option>
						<option value="7" >Gaming</option>
					</select>
					<hr>
					<p style="font-size:15px;text-align:center">Ad Type</p>
					<select id="adtype" class="form-control" name="adtype" onchange="adtypee(this);">
						<option value="0" >All</option>
						<option value="1" >Banner</option>
						<option value="2" >Pop-Up</option>
						<option value="3" >Video</option>
						<option value="4" >Referral Link</option>
					</select>
					<hr>
					<p style="font-size:15px">Height (height><span id="heightspan">0</span>px)</p>
					<input type="range" id="height" name="height" min="0" max="1024" style="width:90%" value="0" onchange="hei(this);">
					<hr>
					<p style="font-size:15px">Width (width><span id="widthspan">0</span>px)</p>
					<input type="range" id="width" name="width" min="0" max="1024" style="width:90%" value="0" onchange="wid(this);">
					<hr>
					<p style="font-size:15px">Cost (cost>$<span id="costspan">0</span>)</p>
					<input type="range" id="cost" name="cost" min="1" max="1000" style="width:90%" value="0" onchange="cst(this);">
					<hr>
				</div>
				
			</div>
			<div class="col-md-10 categories-div" id="categories-div" style="margin-top:10px">
				<?php

				// $userId=$_SESSION['id'];

				$sql="SELECT * FROM ads ORDER BY aid DESC";
				$result=mysqli_query($conn,$sql);				

				$count=1;

				while($row=mysqli_fetch_assoc($result))
				{
					$websiteId=$row['websiteId'];

					$sql1="SELECT * FROM websites WHERE wid='$websiteId'";
					$result1=mysqli_query($conn,$sql1);
					$row1=mysqli_fetch_assoc($result1);

					if($count%3==1)
					{
						?>
						<div class="row">
						<?php
					}
					?>
						<div class="col-md-4">
							<a href="adlisting.php?ad_Id=<?php echo $row['aid']; ?>">
								<div class="category-box" style="background-image: url('<?php echo $row["imgdst1"]; ?>');background-size: 100% 100%;">
									<p style="font-size:20px"><?php echo $row1['websiteName']; ?></p>
								</div>
							</a>
						</div>
					<?php	
					if($count%3==0)
					{
						?>
						</div>	
						<?php
					}
					$count+=1;
				}

				?>	

				<br>
			</div>
		</div>
	</div>	

</body>
</html>