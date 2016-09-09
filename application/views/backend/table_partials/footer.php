	<!-- BEGIN FOOTER -->

	<div class="footer">

		2013 &copy; Metronic by keenthemes.

		<div class="span pull-right">

			<span class="go-top"><i class="icon-angle-up"></i></span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS -->

	<!-- Load javascripts at bottom, this will reduce page load time -->

	<script src="<?php echo base_url(); ?>backend/js/jquery-1.8.3.min.js"></script>	

	<script src="<?php echo base_url(); ?>backend/breakpoints/breakpoints.js"></script>	

	<script src="<?php echo base_url(); ?>backend/bootstrap/js/bootstrap.min.js"></script>		

	<script src="<?php echo base_url(); ?>backend/js/jquery.blockui.js"></script>

	<script src="<?php echo base_url(); ?>backend/js/jquery.cookie.js"></script>

	<!-- ie8 fixes -->

	<!--[if lt IE 9]>

	<script src="assets/js/excanvas.js"></script>

	<script src="assets/js/respond.js"></script>

	<![endif]-->	

	<script type="text/javascript" src="<?php echo base_url(); ?>backend/uniform/jquery.uniform.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>backend/data-tables/jquery.dataTables.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>backend/data-tables/DT_bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>backend/js/jquery.pulsate.min.js"></script>

	<script src="<?php echo base_url(); ?>backend/js/app.js"></script>		

	<script>

		jQuery(document).ready(function() {			

			// initiate layout and plugins

			App.setPage("table_editable");

			App.init();

		});

	</script>

</body>

<!-- END BODY -->

</html>
