<?php include "header.php"; ?> 
 <!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="js/classie.js"></script>
										<script src="js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Dvniel<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->


<!-- Graph Data -->
	
							<div class="graphs">
                                            <canvas id="barChart" width="200" height="100"></canvas>
                                        </div>
                                    </div>


                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        var ctx = document.getElementById('barChart').getContext('2d');
                                        var barChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ['Feedback', 'Total Notices', 'Service Sheets',  'Event Registrations', 'Equipment Requests', 'Total News',  'Total Events', 'Thanksgivings',  'Prayer Requests', 'Prayer Docs','Total BS Docs', 'Gallery','Total Programs', 'Cell Groups', 'Executives', 'Committee', 'Total Admins'],
                                                datasets: [{
                                                    label: 'Data',
                                                    data: [<?php
                                                    
                                                        $result = $db->prepare("SELECT count(*) as total FROM feedback");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                    
                                                        $result = $db->prepare("SELECT count(*) as total FROM notices");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM service_sheets ");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM event_register");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM EQ_requests");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM news");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                       
                                                        $result = $db->prepare("SELECT count(*) as total FROM events");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM thanksgiving");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM p_requests");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        
                                                         $result = $db->prepare("SELECT count(*) as total FROM prayer_docs");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";

                                                       
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM bible_study ");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                     
                                                        $result = $db->prepare("SELECT count(*) as total FROM gallery ");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                             $result = $db->prepare("SELECT count(*) as total FROM programmes");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                         $result = $db->prepare("SELECT count(*) as total FROM cell_groups");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                         $result = $db->prepare("SELECT count(*) as total FROM executives");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM committee");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                        echo ",";
                                                        
                                                        
                                                        $result = $db->prepare("SELECT count(*) as total FROM table_admin ");
                                                        $result->execute();
                                                        echo $result->fetch()['total'];
                                                    ?>],
                                                    backgroundColor: [
                                                        'rgba(245, 40, 145, 0.8)',
                                                        'rgba(255, 149, 0, 0.8)',
                                                        'rgba(78, 18, 70, 0.8)',
                                                        'rgba(122, 0, 255, 0.8)',
                                                        'rgba(0, 0, 0, 0.8)',
                                                        'rgba(255, 99, 132, 0.8)',
                                                        'rgba(255, 0, 0, 0.8)',
                                                        'rgba(0, 255, 255, 0.8)',
                                                        'rgba(23, 58, 28, 0.8)',
                                                        'rgba(25, 26, 59, 0.8)',
                                                        'rgba(25, 26, 59, 0.8)',
                                                        'rgba(233, 255, 138, 1)',
                                                        'rgba(255, 197, 0, 0.8)',
                                                         'rgba(95, 68, 8, 0.99)',
                                                        'rgba(0, 53, 235, 0.8)',
                                                         'rgba(0, 255, 5, 0.8)',
                                                        'rgba(78, 69, 10, 1)',
                                                    ],
                                                    borderColor: [
                                                        'rgba(245, 40, 145, 0.8)',
                                                        'rgba(255, 149, 0, 0.8)',
                                                        'rgba(78, 18, 70, 0.8)',
                                                        'rgba(122, 0, 255, 0.8)',
                                                        'rgba(0, 0, 0, 0.8)',
                                                        'rgba(255, 99, 132, 0.8)',
                                                        'rgba(255, 0, 0, 0.8)',
                                                        'rgba(0, 255, 255, 0.8)',
                                                        'rgba(23, 58, 28, 0.8)',
                                                        'rgba(25, 26, 59, 0.8)',
                                                        'rgba(25, 26, 59, 0.8)',
                                                        'rgba(233, 255, 138, 1)',
                                                        'rgba(255, 197, 0, 0.8)',
                                                         'rgba(95, 68, 8, 0.99)',
                                                        'rgba(0, 53, 235, 0.8)',
                                                         'rgba(0, 255, 5, 0.8)',
                                                        'rgba(78, 69, 10, 1)',
                                                    ],
                                                    borderWidth: 2
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                },
                                        
                                        onClick: function(event, elements) {
                                                    if (elements.length > 0) {
                                                        var index = elements[0].index;
                                                        switch (index) {
                                                            
                                                            case 0:
                                                                window.location.href = 'feedback.php';
                                                                break;
                                                                
                                                            case 1:
                                                                window.location.href = 'all-notices.php';
                                                                break;
                                                                
                                                            case 2:
                                                                window.location.href = 'service_sheets.php';
                                                                break;
                                                                
                                                            case 3:
                                                                window.location.href = 'event-registrations.php';
                                                                break;
                                                                
                                                            case 4:
                                                                window.location.href = 'equipment_requests.php';
                                                                break;
                                                            
                                                            case 5:
                                                                window.location.href = 'all-news.php';
                                                                break;
                                                                
                                                            case 6:
                                                                window.location.href = 'all-events.php';
                                                                break;
                                                                
                                                            case 7:
                                                                window.location.href = 'thanksgiving.php';
                                                                break;
                                                                
                                                                
                                                            case 8:
                                                                window.location.href = 'prayer-requests.php';
                                                                break;
                                                                
                                                            case 9:
                                                                window.location.href = 'bs_docs.php';
                                                                break;
                                                                
                                                            case 10:
                                                                window.location.href = 'all-photos.php';
                                                                break;
                                                                
                                                                
                                                            case 11:
                                                                window.location.href = 'all-programs.php';
                                                                break;
                                                                
                                                            case 12:
                                                                window.location.href = 'cell_groups.php';
                                                                break;
                                                            
                                                            case 13:
                                                                window.location.href = 'all-executives.php';
                                                                break;
                                                                
                                                                
                                                            case 14:
                                                                window.location.href = 'all-committee.php';
                                                                break;
                                                                
                                                                
                                                            case 15:
                                                                window.location.href = 'adminlist.php';
                                                                break;
                                                          
                                                           
                                                        }
                                                    }
                                                }
                                            }
                                        });
                                    </script>
						
									
					
			</div>
		</div>
		<!-- //switches -->
		<!-- <div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h3>Inbox</h3>
					<div class="scrollbar scrollbar1" id="style-2">
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">John Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/5.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Andrew Jos</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Adom Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/4.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Peter Carl</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">John Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>chat</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>John Smith</h5>
									<p>Hello !</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Adom Smith</h5>
									<p>Hi,How are you ? What about our next meeting?</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/><span>10:02 PM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>John Smith</h5>
									<p>Yeah fine</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Adom Smith</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/><span>10:02 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form>
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Send" required=""/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>todo</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									<li>
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span> Sunt in culpa qui officia.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand1" value="">
										<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand2" value="">
										<label for="brand2"><span></span> Dolorem eum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand9" value="">
										<label for="brand9"><span></span> Pain that produces no resultant.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand8" value="">
										<label for="brand8"><span></span> Cupidatat non proident.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand7" value="">
										<label for="brand7"><span></span> Praising pain was born.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand3" value="">
										<label for="brand3"><span></span> Computer & Electronics</label>
									</li>
									<li>
										<input type="checkbox"  id="brand4" value="">
										<label for="brand4"><span></span> Dolorem ipsum quia.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand5" value="">
										<label for="brand5"><span></span> Consequatur aut perferendis.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand6" value="">
										<label for="brand6"><span></span> Dolorem ipsum quia.</label>
									</li>
									
									
								</ul>
							</div>
						</div>
					</div>
					<form>
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit" required=""/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				</div> -->
			<!--body wrapper start-->
			<!-- </div> -->
			 <!--body wrapper end-->
		<!-- </div> -->
        

<?php include "footer.php"; ?>