<?php

session_start();


if(isset($_SESSION['id']))
{

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

    <!-- <script src="general.js"></script> -->

    <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
    a,a:hover{
        text-decoration: none;
    }
    *{
        font-family: 'Open Sans', sans-serif;
    }
    body{
        /*background:url('http://www.hdwallpaperspulse.com/wp-content/uploads/2017/03/28/full-hd-background.jpg');*/
        /*background:url('http://www.qygjxz.com/data/out/103/3952290-hd-background-images.jpg');*/
        /*background-size: 100% 100vh;
        background-repeat: no-repeat;*/
    }

    ::-webkit-input-placeholder {
        text-align: center;
    }

    :-moz-placeholder { /* Firefox 18- */
        text-align: center;  
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        text-align: center;  
    }

    :-ms-input-placeholder {  
        text-align: center; 
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
    .nav-bar-link-box{
        width:25%;
        text-align:center;
        color:white;
    }
    .nav-bar-link-box:hover{
        background-color: #B33771;
    }*/

    /*.header{
        text-align:center;
        border-bottom:1px solid;
        box-shadow: 2px 2px 18px #222f3e;
        position:fixed;
        height:100px;
        background:#222f3e;
        z-index:10;
        color:white;
    }

    .header-boy{
        overflow:hidden;
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

    /*.user-info-outer-div{
    	margin:0;
    	padding: 0;
    }*/

    .tabs-outer-div{
    	/*padding:0;
    	margin:0;*/

    }

    .user-info-box{
        /*border-radius:15px;*/
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
        margin:0 auto;        
        /*border:1px solid grey;*/
        /*border-left:1px solid grey;
        border-top:1px solid grey;
        border-bottom:1px solid grey;*/
        
        /*margin-top: 70px;*/
        background-color: #fff;
        box-shadow: 2px 2px 18px #222f3e;

    }

    @media only screen and (min-width: 800px) {
        .user-info-box{
            position:fixed;
            width:330px;
            height:450px;
            margin-top: 70px;
        }
    }
    @media only screen and (min-width: 600px) {
        .user-info-box{
            /*position:fixed;*/
            /*width:330px;*/
            height:450px;
        }        
    }
    @media only screen and (max-width: 600px) {
        .header-up-dp{
            width:60px;
            height:60px;
            border-radius: 50%;
            margin:0 auto;
            display:block;
        }
        .user-info-box{
            /*position: relative;*/
        }
        .header a {
            float: none;
            display: block;
            text-align: left;
        }
        .header-right {
            float: none;
        }
    }

    

    .tabs-box{
        /*border-radius:15px;*/
        display:block;
        margin:0 auto;
        /*border:1px solid grey;*/
        /*height:100vh;*/
        background-color: #fff;
        box-shadow: 2px 2px 18px #222f3e;
    }

    .up-ad{
        border:1px solid grey;
        width:100%;
        height:500px;
        margin-top:20px;
    }

    .up-ad-info-div{
        width:100%;
        height:100px;
    }

    .tab-content{
        height:auto;
        padding-bottom:15px;
    }


    body{
    	/*background-color:#DAE0E5;*/
    }
	
	</style>

	<title>User Profile</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</head>
<body>
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

	<div class="outer-container container-fluid" style="padding-top:0px"> 
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 user-info-outer-div">					
					<div class="user-info-box">
						<img src="<?php echo $_SESSION['profilePicLocation']; ?>" style="width:100%;height:200px;border-top-left-radius: 15px;border-top-right-radius: 15px">

                        <div class="container">
                            <div class="row" style="margin-top:5px">
                                <h2 style="text-align:center;width:100%"><?php echo $_SESSION['username']; ?></h2>
                            </div>
                            <?php

                            $userId=$_SESSION['id'];

                            $sql00="SELECT email FROM users WHERE uid='$userId'";
                            $result00=mysqli_query($conn,$sql00);
                            $row00=mysqli_fetch_assoc($result00);

                            $sql01="SELECT * FROM ads WHERE websiteOwnerId='$userId'";
                            $result01=mysqli_query($conn,$sql01);
                            $numads=mysqli_num_rows($result01);

                            $sql02="SELECT * FROM websites WHERE ownerId='$userId'";
                            $result02=mysqli_query($conn,$sql02);
                            $numwbs=mysqli_num_rows($result02);

                            ?>
                            <hr>
                            <div class="row" style="margin-top:5px">
                                <p style="width:100%;margin-left:50px">EMAIL: <b><?php echo $row00['email']; ?></b></p>
                            </div>
                            <div class="row" style="margin-top:5px">
                                <p style="width:100%;margin-left:50px">Total Ads Posted: <b><?php echo $numads; ?></b></p>
                            </div>
                            <div class="row" style="margin-top:5px">
                                <p style="width:100%;margin-left:50px">Total Websites Owned: <b><?php echo $numwbs; ?></b></p>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-md-8 col-sm-12 tabs-outer-div">
					<div class="tabs-box">
						<ul class="nav nav-tabs" role="tablist" style="text-align:center">
                            <li class="nav-item" style="width:33%">
                                <a class="nav-link active" href="#MyAds" role="tab" data-toggle="tab">My Ads</a>
                            </li>
                            <!-- <li class="nav-item" style="width:33%">
                                <a class="nav-link" href="#Favourites" role="tab" data-toggle="tab">Favourites</a>
                            </li>
                            <li class="nav-item" style="width:33%">
                                <a class="nav-link" href="#references" role="tab" data-toggle="tab">Settings</a>
                            </li> -->
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active in" id="MyAds">
                                <div class="container">

                                    <?php

                                    $sql="SELECT websiteId,imgdst1,imgdst2,imgdst3 FROM ads WHERE websiteOwnerId='$userId'";
                                    $result=mysqli_query($conn,$sql);

                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                    $websiteId=$row['websiteId'];

                                    $sql1="SELECT websiteName,pageviews,pg_lastmonth FROM websites WHERE wid='$websiteId'";
                                    $result1=mysqli_query($conn,$sql1);
                                    $row1=mysqli_fetch_assoc($result1);

                                    $sql2="SELECT aid FROM ads WHERE websiteId='$websiteId'";
                                    $result2=mysqli_query($conn,$sql2);
                                    $row2=mysqli_fetch_assoc($result2);
                                    $ad_Id=$row2['aid'];
                                    ?>
                                    <div class="up-ad">
                                        <div class="up-ad-img-div">
                                            <div id="demoa<?php echo $websiteId; ?>" class="carousel slide" data-ride="carousel">

                                                <!-- Indicators -->
                                                <ul class="carousel-indicators">
                                                    <li data-target="#demoa<?php echo $websiteId; ?>" data-slide-to="0" class="active"></li>
                                                    <li data-target="#demoa<?php echo $websiteId; ?>" data-slide-to="1"></li>
                                                    <li data-target="#demoa<?php echo $websiteId; ?>" data-slide-to="2"></li>
                                                </ul>
                                                  
                                                <!-- The slideshow -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img style="width:100%;height:400px" src="<?php echo $row['imgdst1']; ?>" width="1100" height="500">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img style="width:100%;height:400px" src="<?php echo $row['imgdst2']; ?>" width="1100" height="500">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img style="width:100%;height:400px" src="<?php echo $row['imgdst3']; ?>" width="1100" height="500">
                                                    </div>
                                                </div>
                                                  
                                                <!-- Left and right controls -->
                                                <a class="carousel-control-prev" href="#demoa<?php echo $websiteId; ?>" data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demoa<?php echo $websiteId; ?>" data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="adlisting.php?ad_Id=<?php echo $ad_Id; ?>">
                                        <div class="up-ad-info-div">
                                            <p style="margin:10px;color:black;font-size:20px;text-align:center"><?php echo $row1['websiteName']; ?></p>
                                            <p style="margin:10px;color:black;text-align:center">Total Page Views: <?php echo $row1['pageviews']; ?> | Page Views Last Month: <?php echo $row1['pg_lastmonth']; ?></p>
                                        </div>
                                        </a> 
                                    </div>

                                    <?php

                                    }


                                    ?>

                                    <!-- <div class="up-ad">
                                        <div class="up-ad-img-div">
                                            <div id="demoa2" class="carousel slide" data-ride="carousel">

                                                <ul class="carousel-indicators">
                                                    <li data-target="#demoa2" data-slide-to="0" class="active"></li>
                                                    <li data-target="#demoa2" data-slide-to="1"></li>
                                                    <li data-target="#demoa2" data-slide-to="2"></li>
                                                </ul>
                                                  
                                                <div class="carousel-inner">

                                                    <div class="carousel-item active">
                                                      <img style="width:100%;height:400px" src="http://www.kinyu-z.net/data/wallpapers/120/1124074.jpg" alt="Los Angeles" width="1100" height="500">
                                                    </div>
                                                    <div class="carousel-item">
                                                      <img style="width:100%;height:400px" src="https://wallpapertag.com/wallpaper/full/4/2/4/267883-vertical-wallpapers-hd-3840x2160-for-1080p.jpg" alt="Chicago" width="1100" height="500">
                                                    </div>
                                                    <div class="carousel-item">
                                                      <img style="width:100%;height:400px" src="https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-Paris-Wallpapers-HD-Free-Download-PIC-WPC00115.jpg" alt="New York" width="1100" height="500">
                                                    </div>
                                                </div>
                                                  
                                                <a class="carousel-control-prev" href="#demoa2" data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demoa2" data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="adlisting.php">
                                        <div class="up-ad-info-div">
                                            <p style="margin:10px;color:black;font-size:20px;text-align:center">WEBSITE 2</p>
                                            <p style="margin:10px;color:black;text-align:center">------INFO------</p>
                                        </div>
                                        </a> 
                                    </div> -->


                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Favourites">
                                <div class="container">


                                    <div class="up-ad">
                                        <div class="up-ad-img-div">
                                            <div id="demof1" class="carousel slide" data-ride="carousel">

                                                <ul class="carousel-indicators">
                                                    <li data-target="#demof1" data-slide-to="0" class="active"></li>
                                                    <li data-target="#demof1" data-slide-to="1"></li>
                                                    <li data-target="#demof1" data-slide-to="2"></li>
                                                </ul>

                                                <div class="carousel-inner">

                                                    <div class="carousel-item active">
                                                      <img style="width:100%;height:400px" src="https://www.travelcaffeine.com/wp-content/uploads/2018/07/fushimi-inari-shrine-sunburst-kyoto-japan-854.jpg" alt="Los Angeles" width="1100" height="500">
                                                    </div>
                                                    <div class="carousel-item">
                                                      <img style="width:100%;height:400px" src="https://i.ytimg.com/vi/CNgiXHrHk7A/maxresdefault.jpg" alt="Chicago" width="1100" height="500">
                                                    </div>
                                                    <div class="carousel-item">
                                                      <img style="width:100%;height:400px" src="https://i.pinimg.com/originals/47/4c/19/474c19219d02e17024c5e9ea6c8a173d.jpg" alt="New York" width="1100" height="500">
                                                    </div>
                                                </div>

                                                <a class="carousel-control-prev" href="#demof1" data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demof1" data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="adlisting.php">
                                        <div class="up-ad-info-div">
                                            <p style="margin:10px;color:black;font-size:20px;text-align:center">WEBSITE 3</p>
                                            <p style="margin:10px;color:black;text-align:center">------INFO------</p>
                                        </div>
                                        </a> 
                                    </div>


                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="references">ccc</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
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