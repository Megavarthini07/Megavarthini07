<?php
session_start();
error_reporting(0);
include('includes/config.php');

$msg = "";
if(isset($_REQUEST['submit'])) {
$ctype = $_REQUEST['ctype'];
$cname = $_REQUEST['cname'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$complient = $_REQUEST['complient'];

$query = "insert into complient (ctype,cname,mobile,email,complient) values ('$ctype','$cname','$mobile','$email','$complient')";
if(mysql_query($query)){
$msg = "Your Complient Registered Successfully!";
} else {
$msg = "Unable to Register!";
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

	    <title>Complient</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
<header class="header-style-1">

	
<?php include('includes/top-header.php');?>

<?php include('includes/main-header.php');?>
	
<?php include('includes/menu-bar.php');?>


</header>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Complient</li>
			</ul>
		</div>
	</div>
</div>

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="track-order-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
<?php echo $msg; ?>
	<h2>Add Your Complient</h2>

	<form class="register-form outer-top-xs" role="form" method="post">
		<div class="form-group">
		    <label class="info-title" for="exampleOrderId1">Complient Type</label>
		    <select class="form-control unicase-form-control text-input" required name="ctype" >
            	<option value="">Select</option>
            	<option value="Product">Product</option>
                <option value="Delivery">Delivery</option>
            </select>
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Your Name</label>
		    <input type="text" class="form-control unicase-form-control text-input" name="cname" id="cname" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Mobile</label>
		    <input type="number" class="form-control unicase-form-control text-input" name="mobile" id="mobile" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Email</label>
		    <input type="email" class="form-control unicase-form-control text-input" name="email" id="email" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Your Complient</label>
		    <textarea class="form-control unicase-form-control text-input" name="complient" id="complient"></textarea>
		</div>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
	</form>	
</div>			</div>
		</div>
		
<div 

<?php echo include('includes/brands-slider.php');?>
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