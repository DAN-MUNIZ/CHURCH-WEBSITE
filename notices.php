<!DOCTYPE HTML>
<?php include "header.php"; ?> 
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Notices- Janani Luwum Youths</title>
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
<style>
        /* Default styles for large screen devices (TVs, Desktops, Tablets) */
        a.btn {
            display: inline-block;
            margin-right: 10px; /* Adjust as needed */
        }

        /* Remove the margin for the last button on large screens */
        a.btn:last-child {
            margin-right: 0;
        }

        /* Styles for mobile devices */
        @media (max-width: 768px) { /* Adjust the max-width value as needed */
            a.btn {
                display: block;
                margin-bottom: 10px; /* Space between buttons on mobile */
            }

            /* Remove the margin for the last button on mobile */
            a.btn:last-child {
                margin-bottom: 0;
            }
        }
    </style>
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
            <li class="active">Notices</li>
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
          <h1>NOTICES</h1>
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
          <div class="col-md-9 posts-archive">
            <Events Listing>
           <div class="listing events-listing">
              <header class="listing-header">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                   
                  </div>
                  
                </div>
              </header> 
<br/>
<br/>

<?php
if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
}

$tbl_name = "notices"; // your table name
$adjacents = 3; // How many adjacent pages should be shown on each side?

// Setting limit to number of displayed notices
$all_notices = ORM::for_table($tbl_name)
    ->order_by_desc('id')
    ->limit(11)
    ->find_array();
$total_pages = count($all_notices);

/* Setup vars for query. */
$targetpage = "pagination.php"; // your file name (the name of this file)
$limit = 5; // how many items to show per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit; // first item to display on this page

// Slice the array to get the records for the current page
$news = array_slice($all_notices, $start, $limit);
?>

<?php foreach ($news as $row): ?>
    <article class="post">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <?php
                $file_extension = pathinfo($row['file'], PATHINFO_EXTENSION);
                if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
                    echo '<a href="notice-detail.php?id=' . $row['id'] . '"><img src="images/notices/' . $row['file'] . '" alt="" class="img-thumbnail img-responsive"></a>';
                } elseif ($file_extension === 'mp4') {
                    echo '<video width="100%" controls loop>
                            <source src="images/notices/' . $row['file'] . '" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>';
                } else {
                    echo 'Unsupported file type';
                }
                ?>
            </div>
            <div class="col-md-7 col-sm-6">
                <h3><a href="notice-detail.php?id=<?php echo $row['id']; ?>" style="color: #0369A3;"><?php echo $row['title']; ?></a></h3>
                <span class="post-meta meta-data" style="font-size: 15px;">
                    <span><i class="fa fa-calendar"></i> <?php echo $row['date']; ?> | <i class="fa fa-clock-o"></i> <?php echo $row['time']; ?> | <i class="fas fa-map-marker-alt"></i> <?php echo $row['venue']; ?></span>
                </span>
                <?php echo strip_tags(substr($row['detail'], 0, 180)); ?>...
            </div>
        </div>
    </article>
<?php endforeach; ?>

<?php
/* Setup page vars for display. */
if ($page == 0) $page = 1; // if no page var is given, default to 1.
$prev = $page - 1; // previous page is page - 1
$next = $page + 1; // next page is page + 1
$lastpage = ceil($total_pages / $limit); // lastpage is = total pages / items per page, rounded up.
$lpm1 = $lastpage - 1; // last page minus 1
?>

<span class="text-muted m-r-sm">
    Showing
    <?php if($lastpage == $next-1): ?>
        <?= $total_pages ?>
    <?php else: ?>
        <?= $page * $limit ?> 
    <?php endif; ?>
    of <?= $total_pages ?>
</span>
<div class="btn-group">
    <?php if($page != 1): ?>
        <a class="btn btn-default" href="?page=<?= $prev ?>"><i class="">Page <?= $prev ?><<</i></a>
    <?php endif; ?>
</div>	
<?php if ($next <= $lastpage): ?>
    <a class="btn btn-default" href="?page=<?= $next ?>"><i class="">>>Page <?= $next ?></i></a>
<?php endif; ?>



<a href="service_sheet.php" class=" btn btn-primary">  VIEW SERVICE PROGRAM <i class="fa fa-eye"> </i></a> 
<a class="btn btn-primary" href="./service_sheets/22ND SEPTEMBER, 2024.pdf" download="YOUTH SUNDAY SERVICE PROGRAM 22ND SEPTEMBER, 2024.pdf ">DOWNLOAD YOUTH SUNDAY SERVICE PROGRAM <i class="fa fa-download"></i></a>
  

    
</section>
</div>
</div>

  <br>
 <!-- Start Side-Bar -->
 <?php include "side-bar.php"; ?>

    <!-- Start Footer -->
    <?php include "footer.php"; ?>