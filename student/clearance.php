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
			<h2 class="h3 mb-0">List of clearance</h2>
		</div>
		<?php
		include './ClearanceView/academic.php';
		?>
		<?php
		include './ClearanceView/hod.php';
		?>
		<?php
		include './ClearanceView/library.php';
		?>
		<?php
		include './ClearanceView/liasion.php';
		?>
		<?php
		include './ClearanceView/bursary.php';
		?>
		<?php
		include './ClearanceView/sport.php';
		?>
		<?php
		include './ClearanceView/sport.php';
		?>
		<?php
		include './ClearanceView/hostel.php';
		?>
		<?php
		include './ClearanceView/security.php';
		?>`
		<div class="form-group"> 
			<button class="btn btn-success form-control text-white"> <i class="icon-copy bi bi-app-indicator"></i> Apply For Clearance</button>
		</div>

	<div class="footer-wrap pd-20 mb-20 mt-5 card-box">
		@2024
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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>