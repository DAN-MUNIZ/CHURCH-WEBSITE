
<!DOCTYPE HTML>
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Notice Detail - Janani Luwum Youths</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
	$result = $db->prepare("SELECT * FROM notices where id= :post_id");
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
            <li><a href="notices.php">Notices</a></li>
            <li class="active"><?php echo $row['title']; ?></li>
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
          <h1>NOTICE</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="notices.php" class="pull-right btn btn-primary">All Notices</a> </div>
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
          <nav class="btn-toolbar pull-right"> 
          <?php
              $current_page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
          ?>
         <a href="<?php echo $current_page_url; ?>" download="notice-detail.html" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Download Page"><i class="fa fa-download"></i></a>
          <a href=" contact.php" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us"><i class="fa fa-phone"></i></a>
          <a href="javascript:void(0);" onclick="sharePage();" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event"><i class="fa fa-location-arrow"></i></a>
            

                  <script>
                  function sharePage() {
                    // URL of the current page
                    var url = window.location.href;
                    
                    // Text to share
                    var text = "Check out this page: " + url;
                    
                    // Share on Facebook
                    window.open("https://www.facebook.com/sharer.php?u=" + encodeURIComponent(url));
                    
                    // Share on Twitter
                    window.open("https://twitter.com/intent/tweet?url=" + encodeURIComponent(url) + "&text=" + encodeURIComponent(text));
                    
                    /* // Share on Whatsapp
                    window.open("https://www.Whatsapp.com/shareArticle?url=" + encodeURIComponent(url) + "&title=" + encodeURIComponent(document.title)); */

                    // Share on Instagram
                    window.open("https://www.Instagram.com/shareArticle?url=" + encodeURIComponent(url) + "&title=" + encodeURIComponent(document.title));
                  }
                  </script>

                          

          </nav>
              <h2 class="post-title"><?php echo $row['title']; ?></h2>
            </header>
         

            <article class="post-content">
              <div class="event-description"> 
                <div class="spacer-20"></div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Event details</h3>
                      </div>
                      <div class="panel-body">
                        <ul class="info-table">
                          <li><i class="fa fa-calendar-xmark"></i> <strong><?php echo $row['date']; ?></strong></li>
                          <li><i class="fa fa-clock-o"></i> <?php echo $row['time']; ?></li>
                          <li><i class="fas fa-map-marker-alt"></i> <?php echo $row['venue']; ?></li>
                          <li><i class="fa fa-phone"></i> <?php echo $row['phone']; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <?php echo $row['detail']; ?>
	
		  <?php } ?>
      </br>
  </br>
  </br>
  </br>
      <div class="btn-group">
   <a class="btn btn-default" href="notices.php"><i class="">Back to Notices<<<</i></a>
    </div>	
    </br>
  </br>
                </div>
                </div>
             
  
 	 <!-- Start Side-Bar -->
    <?php include "side-bar.php"; ?>

  <!-- Start Footer -->
  <?php include "footer.php"; ?>