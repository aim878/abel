<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php'); ?>



		<!-- BEGIN PAGE -->

		<div class="page-content">
			
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<h2>Dashboard Statistics</h2>

				<div class="row-fluid">
						<div class="responsive span6" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">
										90
									</div>
									<div class="desc">									
										User Registered
									</div>
								</div>
								<a class="more" href="">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="responsive span6" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">80</div>
									<div class="desc">Software Order's</div>
								</div>
								<a class="more" href="">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="responsive span6 fix-offset" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">111</div>
									<div class="desc">Compact-Disk Order's</div>
								</div>
								<a class="more" href="">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="responsive span6" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">$121232323</div>
									<div class="desc">Total Sales</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
					</div>

				

				<!-- END PAGE HEADER-->

				<div id="dashboard">

					<div class="row-fluid">

						<div class="span6" style="height:0px;">

							<!-- BEGIN PORTLET-->

							<div class="portlet solid bordered light-grey">

								<div class="portlet-body">

									<div id="site_statistics_content" class="hide">

										<div id="site_statistics" class="chart"></div>

									</div>

								</div>

							</div>

							<!-- END PORTLET-->

						</div>

						<div class="span6" style="height:0px;"">

							<!-- BEGIN PORTLET-->

							<div class="portlet solid light-grey bordered hide">

								<div class="portlet-body">

									<div id="site_activities_content" class="hide">

										<div id="site_activities" style="height:100px;"></div>

									</div>

								</div>

							</div>

							<!-- END PORTLET-->

							<!-- BEGIN PORTLET-->

							<div class="portlet solid bordered light-grey hide">

								<div class="portlet-title">

								</div>

								<div class="portlet-body">

									<div id="load_statistics_content" class="hide">

										<div id="load_statistics" style="height:108px;"></div>

									</div>

								</div>

							</div>

							<!-- END PORTLET-->

						</div>

						

					</div>

				</div>

			</div>

			<!-- END PAGE CONTAINER-->		

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<?php include('includes/footer.php') ?>