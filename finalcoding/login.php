<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysql_query("insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
	echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysql_query("SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysql_fetch_array($query);
if($num>0)
{
$extra="my-cart.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysql_query("insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysql_query("insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Seat Cover | Signi-in | Signup</title>

	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		

		
		
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

       
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
	
		<link rel="shortcut icon" href="assets/images/favicon.ico">
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
	</head>
	
    <style>  body { background-image: url("https://w0.peakpx.com/wallpaper/387/713/HD-wallpaper-solid-lavender-color-minimal.jpg");} </style>
    <body class="cnt-home">
	
		
	
		
<header class="header-style-1">

	
<?php include('includes/top-header.php');?>

<?php include('includes/main-header.php');?>
	
<?php include('includes/menu-bar.php');?>


</header>






<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            
        </div>
    </div>
</div>

<div class="body-content outer-top-bd" >
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
                         


<div class="col-md-4 col-md-offset-4 create-new-account">
    
    <p class="text title-tag-line"><font face="Lucida handwriting" color="darkblue" size="5"><b>CREATE ACCOUNT</b></font></p>
    <form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
<div class="form-group">
            <label class="info-title" for="fullname"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Full Name</font> </label>
            <input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
        </div>


        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Email Address <b></font></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="emailid" required >
        </div>

<div class="form-group">
            <label class="info-title" for="contactno"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Contact No<b></font></label>
            <input type="number" class="form-control unicase-form-control text-input" id="contactno" name="contactno" maxlength="10" required >
        </div>

<div class="form-group">
            <label class="info-title" for="password"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Password<b></font></label>
            <input type="password" class="form-control unicase-form-control text-input" id="password" name="password"  required >
        </div>

<div class="form-group">
            <label class="info-title" for="confirmpassword"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Confirm Password<b></font></label>
            <input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
        </div>


        <button type="submit" name="submit" class="btn-upper btn btn-success checkout-page-button">Sign Up</button>
    </form>
    
</div>  
          </div>
        </div>


        <div class="col-md-4 col-md-offset-4 sign-in">
    <font face="Lucida handwriting" color="darkblue" size="5"><b>SIGN IN</b></font></b>
        <form class="register-form outer-top-xs" method="post">
    <span style="color:red;" >
	<?php
echo htmlentities($_SESSION['errmsg']);
?>
<?php
echo htmlentities($_SESSION['errmsg']="");
?>
    </span>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Email Address</b></font></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1"><font face="Lucida handwriting" color="darkgreen" size="3"><b>Password </b></font></label>
         <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
        </div>
        <div class="radio outer-xs">
            <a href="forgot-password.php" class="forgot-password pull-right">Forgot your Password?</a>
        </div>
        <button type="submit" class="btn-upper btn btn-success checkout-page-button" name="login">Login</button>
    </form>                 
</div>



</div>
<footer id="footer" class="footer color-bg">
      <div class="links-social inner-top-sm" style="background-color:#36cd34; height:300px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                     
<div class="contact-info">
    <div class="footer-logo">
        <div class="logo">
            <a href="index.php">
                
<h3 style="color:#ff7878;"><img src="img/logo.jpg" /></h3>
            </a>
        </div>
    </div>

     <div class="module-body m-t-20">
        <p class="about-us"> </p>
    
       
    </div>

</div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                     
<div class="contact-timing">
    
</div>          </div>

                <div class="col-xs-12 col-sm-6 col-md-4">

<div class="contact-information">
    <div class="module-heading">
        <h4 class="module-title">Contact Details</h4>
    </div>

    <div class="module-body outer-top-xs">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>No.2/22, K.R.Building, Sathy Main Road, Kovilpalayam, Coimbatore-641107.</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>95970 73015</p>
                </div>
            </li>

              
            </ul>
    </div>
</div>
            </div>
            </div>
        </div>
    </div>

<?php include('includes/brands-slider.php');?>
</div>
</div>

<?php include('includes/footer.php');?>

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	

	

</body>
</html>