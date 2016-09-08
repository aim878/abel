

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

								<a href="#">Software Order's Data</a>

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

								<h4><i class="icon-edit"></i>Software Order's Data</h4>

							</div>

							<div class="portlet-body">



								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th width="15%">Buyer Name</th>

											<th width="30%">Software Type</th>

											<th width="20%">Language</th>
											<th width="20%">Date</th>
											<th width="15%">Price</th>


										</tr>

									</thead>

									<tbody>

 									<?php foreach($oftware_order as $data) { ?>

										<tr class="">

											<td><?php echo $data->user_name ?></td>

											<td><?php echo $data->software_name ?></td>

											<td><?php echo $data->software_language ?></td>

											<td><?php echo $data->purchase_date ?></td>
											
											<td><?php echo $data->software_price ?></td>

											<!--<td><a class="edit" href="">Edit</a>&nbsp;<a class="delete" href="">Delete</a></td>-->

										</tr>

									<?php } ?>
 
									</tbody>

								</table>

								<a href="<?php echo base_url(); ?>get_slider_view"><input type="button" class="btn blue" value="Add"></a>

							</div>

						</div>

						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->



<?php include('includes/footer.php') ?>

