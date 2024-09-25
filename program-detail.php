<?php include"header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <?php
               $id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM programmes where id= :programme_id");
	$result->bindParam(':programme_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){                        
?>

  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="programmes.php">Programmes</a></li>
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
          <h1>Programme</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="programmes.php" class="pull-right btn btn-primary">All Programmes</a> </div>
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
         <a href="<?php echo $current_page_url; ?>" download="program-detail.html" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Download Page"><i class="fa fa-download"></i></a>
          <a href=" contact.php" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Contact us"><i class="fa fa-phone"></i></a>
          <a href="javascript:void(0);" onclick="sharePage();" class="btn btn-default" data-placement="bottom" data-toggle="tooltip" data-original-title="Share event"><i class="fa fa-location-arrow"></i></a>
            

                  <script>
                  function sharePage() {
                    // URL of the current page
                    var url = window.location.href;
                    
                    // Text to share
                    var text = "Check out this page: " + url;

                    // Share on Instagram
                    window.open("https://www.Instagram.com/" + encodeURIComponent(url) + "&title=" + encodeURIComponent(document.title));
                    
                    // Share on Twitter
                    window.open("https://x.com/intent/tweet?url=" + encodeURIComponent(url) + "&text=" + encodeURIComponent(text));
                    
                    // Share on Facebook
                    window.open("https://facebook.com/intent/share?url=" + encodeURIComponent(url) + "&text=" + encodeURIComponent(text));

                    
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
                        <h3 class="panel-title">Programme details</h3>
                      </div>
                     <div class="panel-body">
                        <ul class="info-table">
                            <li><i class="fa fa-calendar-xmark"></i> <strong><?php echo $row['date']; ?></strong></li>
                            <li><i class="fa fa-clock-o"></i> <?php echo $row['time']; ?></li>
                            <li><i class="fas fa-map-marker-alt"></i> <?php echo $row['venue']; ?></li>
                            <li><i class="fa fa-phone"></i> <?php echo $row['phone']; ?></li>
                            <li><i class="fa fa-hand-point-right"></i> <?php echo $row['button']; ?></li>
                            <?php if ($row['id'] == 5): ?>
                               <!-- <li><i class="fa fa-hand-point-right"></i> <?php echo $row['button3']; ?></li>-->
                            <?php endif; ?>
                        
                        </ul>
                    </div>
                    </div>

                  </div>
                  </div>
                  
                
                <div class="featured-image"> <img src="images/gallery/<?php echo $row['file'];?>" alt=""> </div>
                <div><?php echo $row['prog-detail']; ?></div>
	
		  <?php } ?>
      </br>
  </br>
  </br>
      <div class="btn-group">
   <a class="btn btn-default" href="programmes.php"><i class="">Back to programmes<<<</i></a>
    </div>	

   
  </br>
  </br>
                </div>
                </div>
             
         
       <!-- Start Side-Bar -->
   <?php include "side-bar.php"; ?>

   <!-- Start Footer -->
   <?php include "footer.php";?>