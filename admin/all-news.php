<?php include"header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All News</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted a News!")?>
                                            </div>
                                            <?php endif;?>
					   <table class="table">
					    <thead>
							<tr>
							  <th>#</th>
							  <th>Title</th>
							   <th>Detail</th>
							  <th>Date</th>
                              <th>File</th>

							  <th>Action</th>
							</tr>
						  </thead>
						  <tbody>
						   <?php                     //include('../connect.php');
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="news";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
                            /*$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($conn,$query));
	$total_pages = $total_pages['num'];
	*/
        $get_posts_tbl = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_posts_tbl);
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				$result = $db->prepare("SELECT * FROM news  ORDER BY id DESC LIMIT $start, $limit");
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
			   <a href="compose-news.php?>" class="fa fa-pen btn btn-success"> Compose News</a>
                      <?php
        
				for($i=1; $row = $result->fetch(); $i++){
                                    
                  
               ?> 
						  
							<tr>
							  <th scope="row"><?php echo $i; ?></th>
							  <td><?php echo $row['news_title']; ?></td>
							  <td><?php echo $row['news_detail']; ?></td>
							  <td><?php echo $row['date']; ?></td>
                              <td> <?php
                                    $file_extension = pathinfo($row['file'], PATHINFO_EXTENSION);
                                    if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
                                        echo '<img src="../images/news/' . $row['file'] . '" alt="" class="img-responsive" style="height: 100px; width: 200px;">';
                                    } elseif ($file_extension === 'mp4') {
                                        echo '<video width="100%" controls>
                                                <source src="../videos/' . $row['file'] . '" type="video/mp4" style="height: 50px; width: 200px;">
                                              Your browser does not support the video tag.
                                            </video>';
                                    } else {
                                        echo 'Unsupported file type';
                                    }
                                    ?>
                              </td>
							  <td>
							  <a class="fa fa-pen btn btn-success" href="https://rbx114.truehost.cloud:2083/cpsess0073035164/3rdparty/phpMyAdmin/index.php?route=/sql&pos=0&db=qrzyqcto_church_db&table=news" target="_blank"> Edit</a>
						<br>
						<br>
						
                               <!--  <a href="deletenews.php?id=<?=$row['id'] ?>" class="fa fa-trash btn  btn-danger warning_4 delbtn"> Delete </a> -->
                               
							  </td>
							</tr>
							 </tbody>
							 <?php } ?>
						</table>
						</div>
						</div>
				</div>
			</div>
		</div>
		<?php include"footer.php"; ?>

		<!-- JavaScript for handling editing -->
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Get all edit buttons
        var editButtons = document.querySelectorAll('.edit-btn');

        // Loop through each edit button
        editButtons.forEach(function(button) {
            // Add click event listener
            button.addEventListener('click', function(event) {
                // Prevent default action
                event.preventDefault();

                // Get the data attributes of the clicked button
                var id = this.getAttribute('data-id');
                var title = this.getAttribute('data-news_title');
                var progDetail = this.getAttribute('data-news_detail');
                var date = this.getAttribute('data-file');
                var time = this.getAttribute('data-date');
                var venue = this.getAttribute('data-time');
                var phone = this.getAttribute('data-venue');

                // Find the parent table row
                var row = this.parentNode.parentNode;

                // Create input elements for editing
                var titleInput = document.createElement('input');
                titleInput.type = 'text';
                titleInput.value = news_title;

                var progDetailInput = document.createElement('input');
                progDetailInput.type = 'text';
                progDetailInput.value = news_detail;

                var dateInput = document.createElement('input');
                dateInput.type = 'text';
                dateInput.value = file;

                var timeInput = document.createElement('input');
                timeInput.type = 'text';
                timeInput.value = date;

                var venueInput = document.createElement('input');
                venueInput.type = 'text';
                venueInput.value = time;

                var phoneInput = document.createElement('input');
                phoneInput.type = 'text';
                phoneInput.value = venue;

                // Replace the table row contents with editable inputs
                row.innerHTML = `
                    <th scope="row">${id}</th>
                    <td><input type="text" value="${news_title}" name="news_title"></td>
                    <td><input type="text" value="${news_detail}" name="news_detail"></td>
                    <td><input type="text" value="${file}" name="file"></td>
                    <td><input type="text" value="${date}" name="date"></td>
                    <td><input type="text" value="${time}" name="time"></td>
                    <td><input type="text" value="${venue}" name="venue"></td>
                    <td>
                        <button class="btn btn-success save-btn">Save</button>
                    </td>
                `;

                // Handle save button click
                var saveButton = row.querySelector('.save-btn');
                saveButton.addEventListener('click', function() {
                    // Fetch the updated values from inputs
                    var updatedTitle = row.querySelector('input[name="news_title"]').value;
                    var updatedProgDetail = row.querySelector('input[name="news_detail"]').value;
                    var updatedDate = row.querySelector('input[name="file"]').value;
                    var updatedTime = row.querySelector('input[name="date"]').value;
                    var updatedVenue = row.querySelector('input[name="time"]').value;
                    var updatedPhone = row.querySelector('input[name="venue"]').value;

                    // Perform actions to save the updated values (e.g., AJAX request)

                    // For demonstration purposes, you can log the updated values
                    console.log("Updated news_title:", updatednews_title);
                    console.log("Updated news_detail:", updatednews_detail);
                    console.log("Updated file:", updatedfile);
                    console.log("Updated date:", updateddate);
                    console.log("Updated time:", updatedtime);
                    console.log("Updated venue:", updatedvenue);

                    // Replace the editable inputs with the updated values
                    row.innerHTML = `
                        <th scope="row">${id}</th>
                        <td>${updatednews_title}</td>
                        <td>${updatednews_detail}</td>
                        <td>${updatedfile}</td>
                        <td>${updateddate}</td>
                        <td>${updatedtime}</td>
                        <td>${updatedvenue}</td>
                        <td>
                            <a class="fa fa-pen btn btn-success edit-btn" data-id="${id}" data-title="${updatednews_title}" data-news_detail="${updatednews_detail}" data-file="${updatedfile}" data-date="${updateddate}" data-time="${updatedtime}" data-venue="${updatedvenue}" href="#"> Edit</a>
                            <br>
                            <br>
                        </td>
                    `;
                });
            });
        });
    });
</script>
