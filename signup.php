<?php

session_start();

if(!isset($_SESSION['id']))
{
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="general.js"></script>

    <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
    a,a:hover{
        text-decoration: none;
    }
    *{
        font-family: 'Open Sans', sans-serif;
    }
    body{
        background:url('signup_back.jpg');
        /*background:url('http://www.qygjxz.com/data/out/103/3952290-hd-background-images.jpg');*/
        background-size: 100% 100vh;
        background-repeat: no-repeat;
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
    .nav-bar-link-box{
        width:25%;
        text-align:center;
        color:white;
    }
    .nav-bar-link-box:hover{
        background-color: #B33771;
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
    .outer-container{
        padding:0px;
        width:100%;
        top:97px;
        position:relative;        
    }

    

    input[type=text], input[type=password], input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*header{
        background-color: #666;
        padding: 22px;
        text-align: center;
        font-size: 22px;
        color: white;
    }*/

    .signin-box{
        width:450px;
        border-radius:15px;
        display:block;
        margin:0 auto;
    }

    .login-button{
        /*background-color: #aab0c1;*/
        background-color: #0fb9b1;
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

    .dot {
        height: 150px;
        width: 150px;
         margin-top:20px;
        margin-bottom:10px;
        border-radius: 50%;
        display: inline-block;
    }
    
    .signinbox-footer {
        padding: 16px;
    }
    .signin-box-background{
        background-color: rgba(42, 51, 56, 0.7);
    }
    .signinbox-input-background{
        background-color: rgba(79, 68, 89, 0.2);
        color:#fff;
        border-color: rgba(99, 145, 170, 0.7);
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #fff;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #fff;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #fff;
    }

    .login-button{
        /*background-color: #aab0c1;*/
        background-color: #0fb9b1;
        width:100%;
    }

    </style>

	<title>Signup</title>


</head>
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
        <div class="signin-box signin-box-background" style="padding-bottom:10px">
            <form name="signup_form" method="Post" action="signup_system.php">
                <div style="text-align:center">

                    <img style="border-radius:50%" class="dot" src="https://previews.123rf.com/images/solargaria/solargaria1709/solargaria170900007/85362512-user-icon-male-avatar-in-business-suit-businessman-flat-icon-man-in-business-suit-avatar-of-business.jpg">
                </div>
                <div class="container">

                    <div>
                        <input type="text" class="signinbox-input-background name-box" style="width:49.5%" placeholder="First Name" name="firstname" required>
                        <input type="text" class="signinbox-input-background name-box" style="width:49.5%" placeholder="Last Name" name="lastname" required>                        
                    </div>
                    
                    <input type="text" class="signinbox-input-background" placeholder="Username" name="username" required>

                    <input type="email" class="signinbox-input-background" placeholder="Email" name="email" required>

                    <input type="password" class="signinbox-input-background" placeholder="Password" name="psw" required>

                    <input type="submit" class="signinbox-input-background login-button" value="Sign Up" name="submit"></input>
                    <p style="color:#fff;font-size:15px;padding-top:10px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                </div>

            </form>
        </div>
    </div>

    <!-- <div class="container">
    	<form  name="signup_form" onsubmit="return validationForm()" style="border:1px solid #ccc" method="post">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>

                <hr>

                <label for="firstname"><b>First Name</b></label>
                <input type="text" id="first-name" placeholder="Enter First Name" name="firstname" required><p id="fname"></p>


                <label for="lastname"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="lastname" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>	
        </form>
    </div> -->


</body>
</html>

<?php

}
else
{
    header("LOCATION: user_profile.php");
}


?>