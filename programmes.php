
<!DOCTYPE HTML>
<?php include "header.php"; ?> 
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Programmes - Janani Luwum Youths</title>
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
  <div class="nav-backed-header parallax"> <!-- style="background-image:url(images/slide1.jpg);" -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Programmes</li>
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
        <div class="col-md-12">
          <h1>PROGRAMMES</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9"> 
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <div class="row">
                  <div class="col-md-4 col-sm-6">
                   
                  </div>
                  
                </div>
              </header>
              
              <?php
if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
}

$tbl_name = "programmes"; // your table name
$adjacents = 3; // How many adjacent pages should be shown on each side?

// Get total number of records in the 'programmes' table
$get_programmes = ORM::for_table("$tbl_name")->find_array();
$total_programmes = count($get_programmes);

/* Setup vars for query. */
$targetpage = "pagination.php"; // your file name (the name of this file)
$limit = 5; // how many items to show per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit; // first item to display on this page

/* Get data. */
$programmes = ORM::for_table("programmes")
    ->limit($limit)
    ->offset($start)
    ->order_by_asc('id')
    ->find_array();
?>

<section class="listing-cont">
    <ul>
        <?php foreach ($programmes as $row): ?>
            <li class="item event-item">
                <div class="event-detail" style="width: 100%; max-width: 600px; margin: 0 auto;">
                    <h4 style="font-size: 19px;"> <a href="program-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                    <span class="event-dayntime meta-data" style="font-size: 15px;">
                        <i class="fa fa-calendar-days"></i> <?php echo $row['date']; ?> |
                        <i class="fa fa-clock-o"></i> <?php echo $row['time']; ?> |
                        <i class="fas fa-map-marker-alt"></i> <?php echo $row['venue']; ?> |
                        <i class="fa fa-phone"></i> <?php echo $row['phone']; ?>
                    </span>
                    <?php echo strip_tags(substr($row['prog-detail'], 0, 250)); ?>...
                    <a href="program-detail.php?id=<?php echo $row['id']; ?>" style="color: #0369A3; text-decoration: none;">Read More </a></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <span class="text-muted m-r-sm">
        Showing <?php echo min($total_programmes, $page * $limit); ?> of <?php echo $total_programmes; ?>
    </span>
    

    </div>
</section>
        </div>
        </br>
      

   <!-- Start Side-Bar -->
   <?php include "side-bar.php"; ?>
  
   <!-- Start Footer -->
   <?php include "footer.php"; ?>