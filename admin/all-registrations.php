<?php include "header.php"; ?>
<!-- //header-ends -->
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">All Event Registrations</h3>
        <div class="xs tabls">
            <div class="panel-body1">
                <?php if (get("success")) : ?>
                    <div>
                        <?= App::message("success", "Successfully deleted a Bible Study Document!") ?>
                    </div>
                <?php endif; ?>
                <div class="filter">
                    <label for="gender">Filter by Gender:</label>
                    <select id="gender">
                        <option value="">All</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="event_type">Filter by Event Title:</label>
                    <select id="event_type">
                        <option value="">All</option>
                        <option value="AGM">AGM</option>
                        <option value="Worship Fest">Worship Fest</option>
						<option value="Ladies Retreat">Ladies Retreat</option>
						<option value="Sports Day">Sports Day</option>
						<option value="Youths Dinner">Youths Dinner</option>
						<option value="Ladies Seminar">Ladies Seminar</option>
						<option value="Beach Picnic">Beach Picnic</option>
						<option value="P & W Retreat">P & W Retreat</option>
						<option value="Cultural Day">Cultural Day</option>
						<option value="Ladies Week">Ladies Week</option>
						<option value="Children's Music Fest">Children's Music Fest</option>
						<option value="Youth Kesha">Youth Kesha</option>
						<option value="Annual KAYO Conference">Annual KAYO Conference</option>
					
                        <!-- Add more event types as needed -->
                    </select>
                    <button id="apply-filter" class=" fa fa-filter btn  btn-danger warning_4 delbtn"> Apply Filter</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Event Title</th>
                            <th>Confirmation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
					<?php                     //include('../connect.php');
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="event_register";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
                            /*$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($conn,$query));
	$total_pages = $total_pages['num'];
	*/
        $get_service_sheets = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_service_sheets);
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				$result = $db->prepare("SELECT * FROM event_register  ORDER BY id DESC LIMIT $start, $limit");
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
							  <th scope="row"><?php echo $i; ?></th>
							  <td><?php echo $row['fname']; ?></td>
							  <td><?php echo $row['lname']; ?></td>
                              <td><?php echo $row['gender']; ?></td>
							  <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['contact']; ?></td>
							  <td><?php echo $row['event_title']; ?></td>
                              <td><?php echo $row['confirmation']; ?></td>
							  
							  <td>
							
								<a href="delete-registrations.php?id=<?=$row['id'] ?>" class="fa fa-trash btn  btn-danger warning_4 delbtn"> Delete </a>
					
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
<?php include "footer.php"; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to fetch and display filtered data
        function fetchFilteredData() {
            var gender = document.getElementById("gender").value;
            var eventType = document.getElementById("event_type").value;

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch_filtered_data.php?gender=" + gender + "&event_type=" + eventType, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("table-body").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Apply filter button click event
        document.getElementById("apply-filter").addEventListener("click", function() {
            fetchFilteredData();
        });

        // Initial data load
        fetchFilteredData();
    });
</script>
