<?php include "header.php"; ?>
<!-- //header-ends -->
		<!-- //header-ends -->	
			<div id="page-wrapper">
				<div class="graphs">
				
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Add Committee Member
									</div>

									<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully saved information!")?>
                                            </div>
                                            <?php endif;?>
																		<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="save-committee member.php" method="post" enctype="multipart/form-data">
											
												<label>Name : </label>
												<input type="text" name="name" class="form-control1 control3">
												<label>Office : </label>
												<input type="text" name="office" class="form-control1 control3">
												<label>Phone : </label>
												<input type="text" name="phone" class="form-control1 control3">
												<label>Email : </label>
												<input type="text" name="email" class="form-control1 control3">
											<hr>
											<input type="submit" value="Submit Committee Member">
										</form>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--footer section start-->
		<?php include "footer.php"; ?>
        <!--footer section end-->

     
 