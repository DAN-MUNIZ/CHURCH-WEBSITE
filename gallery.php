<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Photo Gallery</li>
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
          <h1>PHOTO GALLERY</h1>
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
          <ul class="isotope-grid" data-sort-id="gallery">
            <?php
            if (!isset($_GET["page"])) {
                $_GET["page"] = 1;
            }

            $tbl_name = "gallery"; // your table name
            $adjacents = 3;
            $limit = 16; // how many items to show per page
            $page = $_GET['page'];
            $start = ($page - 1) * $limit;

            // Get the total number of image items
            $total_images = ORM::for_table($tbl_name)
                ->where_raw("file LIKE '%.jpg' OR file LIKE '%.jpeg' OR file LIKE '%.png'")
                ->count();

            // Get data for the current page
            $images = ORM::for_table($tbl_name)
                ->where_raw("file LIKE '%.jpg' OR file LIKE '%.jpeg' OR file LIKE '%.png'")
                ->limit($limit)
                ->offset($start)
                ->order_by_desc('id')
                ->find_array();

            foreach ($images as $row):
                ?>
                <li class="col-md-3 col-sm-3 grid-item post format-image">
                    <div class="grid-item-inner">
                        <?php
                        $file_extension = pathinfo($row['file'], PATHINFO_EXTENSION);
                        if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
                            echo '<a href="images/gallery/' . $row['file'] . '" data-rel="prettyPhoto" class="media-box">
                                    <img src="images/gallery/' . $row['file'] . '" alt="" class="img-thumbnail img-responsive">
                                  </a>';
                        }
                        ?>
                    </div>
                </li>
            <?php endforeach; ?>
          </ul>

          <div class="text-align-center">
            <span class="text-muted m-r-sm">
              Showing
              <?php if ($page * $limit > $total_images): ?>
                <?= $total_images ?>
              <?php else: ?>
                <?= $page * $limit ?>
              <?php endif; ?>
              of <?= $total_images ?>
            </span>
            <div class="btn-group">
              <?php if ($page > 1): ?>
                <a class="btn btn-default" href="?page=<?= $page - 1 ?>"><i class="">Page <?= $page - 1 ?> <<</i></a>
              <?php endif; ?>
              <?php if ($page * $limit < $total_images): ?>
                <a class="btn btn-default" href="?page=<?= $page + 1 ?>"><i class="">>> Page <?= $page + 1 ?></i></a>
              <?php endif; ?>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>
