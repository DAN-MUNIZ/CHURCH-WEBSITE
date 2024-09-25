<!DOCTYPE HTML>
<?php include "header.php"; ?> 
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Sermon Document - Janani Luwum Youths</title>
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
            <li><a href="sermons.php">Sermons</a></li>
            <li class="active">Sermon Document</li>
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
          <h1>SERMON DOCUMENT</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="sermons.php" class="pull-right btn btn-primary">All Sermons</a> </div>
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

<!-- Download Button -->
<a class="btn btn-default" href="./SermonDocs/TRANSFORMED MINDSET.pdf" download>Download Document <i class="fa fa-download"></i></a>
<br>
<br>
<br>
<br>

<?php
$servername = "localhost";
$dbname = "qrzyqcto_church_db";
$username = "qrzyqcto_MUN1Z";
$password = "Mun1z**/01/****";

try {
    // Establish a connection to the database
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve the file URL from the database for the most recent document
    $sql = "SELECT file FROM sermon_docs WHERE id = 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the document URL is retrieved successfully
    if ($row) {
        // Get the document URL
        $document_url = $row['file'];

        // Display the document using an object tag
       echo "<object data='$document_url' type='application/pdf' width='100%' height='100%'></object>";
       
    } else {
        // If document not found or error occurred
        echo "Document not found or an error occurred.";
    }
} catch(PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
<section>
    <br/>
    <br/>
</section>



<!-- <section>
<div>
<object data="./BibleStudy/THEJOYOFSINGLEHOOD.pdf" type="application/pdf" width="100%" height="100%"></object>   
</div>
<br/>
<br/>
 -->
</div>
</div>
</div>
</div>
</div>
</div>
</br>
</br>
 

    <!-- Start Footer -->
    <?php include "footer.php"; ?>