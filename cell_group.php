<!DOCTYPE HTML>
<?php include "header.php"; ?> 
<html class="no-js">
<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Notice- Janani Luwum Youths</title>
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
       .table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #0369A3;
    color: white;
}

tr:hover {
    background-color: #f5f5f5;
}

.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
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
            <li><a href="programmes.php">Programmes</a></li>
            <li class="active">Cell Groups</li>
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
          <h1> HOME FELLOWSHIP CELL GROUPS</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="programmes.php" class="pull-right btn btn-primary">All Programmes</a> </div>
      </div>
    </div>
  </div>
</header>
    
  <!-- End Page Header --> 

   <!-- Start Content table --> 	
   <div class="table-responsive">
					   <table class="table">
             <thead style="color: white; font-weight: bold;">
							<tr>
							  <th>#</th>
							  <th>Zone</th>
                              <th>Coordinator's Name</th>
							  <th>Coordinator's Number</th>
							  <th>Host's Name</th>
							  <th>Preacher's Name</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php                      
                          //include('../connect.php');
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="cell_groups";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
                            /*$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($conn,$query));
	$total_pages = $total_pages['num'];
	*/
        $get_cell_groups_tbl = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_cell_groups_tbl);
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				$result = $db->prepare("SELECT * FROM cell_groups ORDER BY id ASC LIMIT $start, $limit");
				$result->execute();
                                
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
			              
                            <span class="text-muted m-r-sm">Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                of <?=$total_pages?>
                                        </span>
                            
                            <div class="btn-group">
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="fa fa-angle-left"></i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="fa fa-angle-right"></i></a>
                                <?php endif;?>
                            </div>
                        
			        
			    </div>
                                </div>
                                


                      <?php
        
		for($i=1; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
						  
						  
						  
						  <tr>
							<th style="color: white; strong" scope="row"><?php echo $i; ?></th>
							<td><?php echo $row['zone']; ?></td>
                            <td><?php echo $row['c_name']; ?></td>
                            <td><?php echo $row['c_number']; ?></td>
							<td><?php echo $row['host']; ?></td>
                            <td><?php echo $row['preacher']; ?></td>
							  
							</tr>
							 </tbody>
							 <?php } ?>
                             
						</table>
						</div>
						</div>
				</div>
			</div>
		</div>

		  <!-- Start Footer -->
    <?php include "footer.php"; ?>
      <!-- End Footer -->

 