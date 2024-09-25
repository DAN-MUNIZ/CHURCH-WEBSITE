<?php include "header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
									Add Programmes
									</div>
									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully edited Programs!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
									<?php
                           
				$result = $db->prepare("SELECT * FROM tbl_resources");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
                                    
                              

                
               ?>  
										
										<form class="com-mail" action="save-programs.php" method="post" enctype="multipart/form-data">
										<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="save-event.php" method="post" enctype="multipart/form-data">
											
										<label>Program Title :</label>
                                <input type="text" name="title" class="form-control1 control3" placeholder="Program Title">
                                <label>Program Detail :</label>
                                <textarea rows="6" id="body" name="prog-detail" class="form-control1 control2"></textarea>
                                <br>
                                <label> Program Date :</label>
                                <input type="date" name="date" class="form-control1 control3" placeholder="Program Date">
                                <label>Program Time:</label>
                                <input type="time" name="time" class="form-control1 control3" placeholder="Program Time">
                                <label>Program Venue :</label>
                                <input type="text" name="venue" class="form-control1 control3" placeholder="Program Venue" class="">
                                <script>
                                    CKEDITOR.replace('body');
                                </script>

                                <label>Add Photo</label>
                                <input type="file" name="file" class="form-control1 control3">

                                <hr>
                                <input type="submit" value="Submit News">
                            </form>
										<?php } ?>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>