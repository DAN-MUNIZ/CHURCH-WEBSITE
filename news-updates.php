<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax"> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">News Update</li>
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
          <h1>Latest News</h1>
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
         
         <?php
if (!isset($_GET["page"])) {
    $_GET["page"] = 1;
}

$tbl_name = "news"; // your table name
$adjacents = 3; // How many adjacent pages should be shown on each side?

// Get total number of records in the 'news' table
$get_news = ORM::for_table("$tbl_name")->find_array();
$total_pages = count($get_news);
	
	
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				//$news = $db->prepare("SELECT * FROM posts_tbl  ORDER BY id ASC LIMIT $start, $limit");
				//$news->execute();
                                
                             
                            
				
	                          $news = ORM::for_table("news")
                                          ->limit($limit)
                                          ->offset($start)
                                          ->order_by_desc('news.id')
                                           ->find_array();
                                       
                                  ?>
                                  <?php foreach ($news as $row):?>

                                
                  <?php               
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
                                                                      
           <article class="post">
        <div class="row">
        <div class="col-md-4 col-sm-4">
            <?php
            $file_extension = pathinfo($row['file'], PATHINFO_EXTENSION);
            if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
                echo '<a href="news_post.php?id=' . $row['id'] . '"><img src="images/news/' . $row['file'] . '" alt="" class="img-thumbnail img-responsive"></a>';
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
        <div class="col-md-8 col-sm-8">
            <h3><a href="news_post.php?id=<?php echo $row['id']; ?>" style="color: #0369A3;"><?php echo $row['news_title']; ?></a></h3>
            <span class="post-meta meta-data">
                <span><i class="fa fa-calendar-check"></i> <?php echo $row['date']; ?> | <i class="fa fa-clock-o"></i> <?php echo $row['time']; ?> | <i class="fas fa-map-marker-alt"></i> <?php echo $row['venue']; ?></span>
            </span>
            <?php echo strip_tags(substr($row['news_detail'], 0, 180)); ?>... <br><br>
            <p><a href="news_post.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Continue reading <i class="fa fa-hand-point-up"></i></a></p>
        </div>
    </div>
</article>


         
			<?php endforeach;?>	 
                                                    
							<?php ?>
                                                                     
                                        <span class="text-muted m-r-sm">
                                                             
                                                             Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                                             of <?=$total_pages?>
                                
                                        </span>
                                                    <div class="btn-group">
                             
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="">Page <?=$prev?><<</i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="">>>Page <?=$next?></i></a>
                                <?php endif;?>
                            </div>	
			
			</div>
                                
                              
          <!-- Start Side-Bar -->
   <?php include "side-bar.php"; ?>

  <!-- Start Footer -->
  <?php include "footer.php"; ?>