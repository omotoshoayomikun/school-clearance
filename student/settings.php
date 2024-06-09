<?php

$title = "DeskApp - Bootstrap Admin Dashboard HTML Template";
$links = array(

	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);
require_once './layout/header.php';
include './layout/navbar.php';
include './layout/sidebar.php';
?>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="title pb-20">
				<h2 class="h3 mb-0">Settings</h2>
			</div>

			<div class="card-box mb-30">
				<div class="pb-20 pt-20 pr-20 pl-20">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">Matric Num: </div>
							<div class="col-sm-4">CS/HND/F22/`1234</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">Full Name: </div>
							<div class="col-sm-4">Kayode Olatunde</div>
						</div>

					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">Department: </div>
							<div class="col-sm-4">Computer Science</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">Level: </div>
							<div class="col-sm-4">HND II</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">Year: </div>
							<div class="col-sm-4">2023</div>
						</div>
						</div.. />
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">Gender: </div>
								<div class="col-sm-4">Male</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">Password: </div>
								<div class="col-sm-2">***********</div>
								<div class="col-sm-4">
									<a href="" class="text-secondary" style="text-decoration: underline;">change</a>
								</div>
							</div>
						</div>

					</div>
				</div>


			</div>
		</div>
		<!-- js -->
		<script src="../vendors/scripts/core.js"></script>
		<script src="../vendors/scripts/script.min.js"></script>
		<script src="../vendors/scripts/process.js"></script>
		<script src="../vendors/scripts/layout-settings.js"></script>
		<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="../vendors/scripts/dashboard3.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
				style="display: none; visibility: hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
</body>

</html>