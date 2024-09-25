<!DOCTYPE HTML>
<?php include "header.php"; ?> 
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Prayer Request Form -  Janani Luwum Youths</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link rel="Website Icon" type="png" href="images/Web icon.png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=403202216515066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 
  
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax"> <!--  style="background-image:url(images/slide1.jpg);" -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Prayer Service</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 



  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1> PRAYER REQUEST FORM</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="programmes.php" class="pull-right btn btn-primary">All Programmes</a> </div>
      </div>
    </div>
  </div>
</header>
    
  <!-- End Page Header --> 
 
  <!-- Start Prayer Form -->
<div class="form-container">
    <form class="form" method="post" action="prayer_request_form_handler.php">

        <div class="flex">
            <label class="name-label">
                <input required placeholder="First Name" type="text" class="input" id="fname" name="fname">
            </label>

            <label class="name-label">
                <input required placeholder="Last Name" type="text" class="input" id="lname" name="lname">
            </label>
        </div>

        <label>
            <input required placeholder="Email" type="email" class="input" id="email" name="email">
        </label>

        <label>
            <input required placeholder="Contact Number" type="tel" class="input" id="contact" name="contact">
        </label>

        <label>
            <textarea required rows="5" placeholder="Prayer Request (Max: 2000 Characters)" class="requestbox" id="request" name="request"></textarea>
        </label>

        <label>
            <div class="checkbox-wrapper">
                <input type="checkbox" class="checkbox" id="anonymous" name="anonymous">
                <span style="color:white">Keep This Request Anonymous</span>
            </div>
        </label>

        <button class="fancy" type="submit">
            <span class="top-key"></span>
            <b><span class="text">SUBMIT</span></b>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
        </button>
    </form>
</div>
<!-- End Prayer Request Form -->




    <!-- Start Footer -->
    <?php include "footer.php"; ?>
      <!-- End Footer -->

 


