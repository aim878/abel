

<?php include('table_partials/header.php'); ?>

<?php include('includes/sidebar.php'); ?>

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->			

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12"> 

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			

						<h3 class="page-title">

							Software Order's Data				

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">Regiterd User Data</a>

								<i class="icon-angle-right"></i>

							</li>

							

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<h4><i class="icon-edit"></i>Regiterd User's</h4>

							</div>

							<div class="portlet-body">



								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th width="15%">Name</th>
											<th width="15%">Email</th>
											<th width="15%">Contact</th>
											<th width="15%">Gender</th>
											<th width="15%">Status</th>
											<th width="15%">Date</th>


										</tr>

									</thead>

									<tbody>

 									
									<?php foreach ($users as $user) { ?>
										<tr class="">
											<td><?php echo $user->user_name ?></td>
											<td><?php echo $user->user_email ?></td>
											<td><?php echo $user->user_contact ?></td>
											<?php
												if($user->user_gender==1) {
											?>
													<td>Male</td>
											<?php
												}else {
											?>
													<td>Female</td>
											<?php
												}
											?>

											<?php
												if($user->user_status==1){
											?>
													<th><a href="#myModal2" data-toggle="modal">Active</a></th>
											<?php }else{ ?>
													<th><a href="#myModal2" data-toggle="modal">De-active</a></th>
											<?php } ?>
											<th><?php echo $user->user_registered_date ?></th>

											<!--<td><a class="edit" href="">Edit</a>&nbsp;<a class="delete" href="">Delete</a></td>-->

										</tr>
									<?php } ?>
 
									</tbody>

								</table>

							</div>

						</div>

					<!-- END EXAMPLE TABLE PORTLET-->
						<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h3 id="myModalLabel3">Change User Status</h3>
							</div>
							<div class="modal-body">
                            <div class="control-group">
                               <label class="control-label">Are you sure, you want to change user status.</label>
                               <div class="controls">
                                  <label class="radio">
                                  <input type="radio" name="optionsRadios1" value="option1" />
                                  Active
                                  </label>
                                  <label class="radio">
                                  <input type="radio" name="optionsRadios1" value="option2" checked />
                                  Deactive
                                  </label>   
                               </div>
                            </div>
							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								<button data-dismiss="modal" class="btn blue">Confirm</button>
							</div>
						</div>

					</div>

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->



	



<?php include('table_partials/footer.php') ?>

