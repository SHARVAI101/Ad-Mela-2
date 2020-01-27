<?php

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

    <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);
    a,a:hover{
        text-decoration: none;
    }
    *{
        font-family: 'Open Sans', sans-serif;
    }
    body{
        background:url('signin_back.jpg');
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
    


    input[type=text], input[type=password] {
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

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
         background-color: #666;
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
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn {
           width: 100%;
        }
    }
    </style>

    <title>Sign In</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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


    <div class="outer-container container-fluid" style="padding-top:50px" > 
        <div class="signin-box signin-box-background">
             <form name="signup_form" method="Post" action="signin_system.php">
                <div style="text-align:center">
                    <img style="border-radius:50%" class="dot" src="https://i.pinimg.com/originals/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.png">
                </div>
                <div class="container">
                    <input type="text" class="signinbox-input-background" placeholder="Username" name="uname" required>

                    <input type="password" class="signinbox-input-background" placeholder="Password" name="psw" required>
                        
                    <button type="submit" name="login-button" class="login-button">Login</button>
                </div>

                <div class="signinbox-footer"> 
                    <button type="button" class="cancelbtn" onclick="window.location.href='signup.php'">Sign Up</button>
                </div>
            </form>
        </div>        
    </div>


</body>
</html>

<?php

}
else
{
    header("LOCATION: user_profile.php");
}


?>