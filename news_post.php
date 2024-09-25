<!DOCTYPE HTML>
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>News - Janani Luwum Youths</title>
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
<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
   <?php
               $id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM news where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){                        
?>
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="news-updates.php">News Updates</a></li>
            <li class="active"><?php echo $row['news_title']; ?></li>
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
        <div class="col-md-8 col-sm-8">
          <h1>News</h1>
        </div>
        <div class="col-md-0 col-sm-2 col-xs-15"> <a href="news-updates.php" class="pull-right btn btn-primary">All News</a> </div>
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
            <header class="single-post-header clearfix">
              <h2 class="post-title"><?php echo $row['news_title']; ?></h2>
            </header>
           <article class="post-content">
    <span class="post-meta meta-data">
        <span><i class="fa fa-calendar-days"></i> Posted on <?php echo $row['date']; ?></span>
    </span>
    <div class="featured-image">
        <?php
        $file_extension = pathinfo($row['file(p)'], PATHINFO_EXTENSION);
        if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
            echo '<img src="images/news/post/' . $row['file(p)'] . '" alt="">';
        } elseif ($file_extension === 'mp4') {
            echo '<video width="100%" controls loop>
                        <source src="./videos/' . $row['file'] . '" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>';
        } else {
            echo 'Unsupported file type';
        }
        ?>
    </div>
    <div><?php echo $row['news_detail']; ?></div>
    <br/>
    <br/>
    <br/>
    <div class="btn-group">
        <a class="btn btn-default" href="news-updates.php"><i class="">Back to News<<<</i></a>
    </div>
</article>

              <!-- <div class="post-meta"> 
			   <h5>Share this post:</h5>                                     Go to www.addthis.com/dashboard to customize your tools
<<<<div class="addthis_sharing_toolbox"></div>>> -->
			 <br/>
       <br/>
       <br/>
       

		  <?php } ?>
  </div>

   <!-- Start Side-Bar -->
   <?php include "side-bar.php"; ?>
   
   <!-- Start Footer -->
   <?php include "footer.php"; ?>