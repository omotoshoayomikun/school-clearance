<?php

include '../server/database.php';

session_start();
$staff_id = $_SESSION['staff_id'];
$staff_fname = $_SESSION['staff_f_name'];
$staff_lname =  $_SESSION['staff_l_name'];
$staff_unit = $_SESSION['staff_unit'];
$staff_department = $_SESSION['staff_department'];

$title = "Staff Dashboard";

$links = array(
	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);

if (!$_SESSION['staff_id']) {
	header("Location: ./login.php");
}


// TO GET THE NUMBERS OF ROWS FOR TOTAL
if ($staff_unit === "hod") {
	$sql = "SELECT id FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department'";
	$totalResult = $conn->query($sql);
	$totalRes = $totalResult->num_rows;
} else {
	$sql = "SELECT id FROM clearance WHERE clearance_type = '$staff_unit'";
	$totalResult = $conn->query($sql);
	$totalRes = $totalResult->num_rows;
}

// TO GET THE NUMBERS OF ROWS FOR PENDING
if ($staff_unit === "hod") {
	$sql = "SELECT id FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department' AND status = 'pending'";
	$pendingResult = $conn->query($sql);
	$pendingRes = $pendingResult->num_rows;
} else {
	$sql = "SELECT id FROM clearance WHERE clearance_type = '$staff_unit' AND status = 'pending'";
	$pendingResult = $conn->query($sql);
	$pendingRes = $pendingResult->num_rows;
}


// TO GET THE NUMBERS OF ROWS FOR approved
if ($staff_unit === "hod") {
	$sql = "SELECT id FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department' AND status = 'approved'";
	$approvedResult = $conn->query($sql);
	$approvedRes = $approvedResult->num_rows;
} else {
	$sql = "SELECT id FROM clearance WHERE clearance_type = '$staff_unit' AND status = 'approved'";
	$approvedResult = $conn->query($sql);
	$approvedRes = $approvedResult->num_rows;
}

// TO GET THE NUMBERS OF ROWS FOR REJECTED
if ($staff_unit === "hod") {
	$sql = "SELECT id FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department' AND status = 'rejected'";
	$rejectedResult = $conn->query($sql);
	$rejectedRes = $rejectedResult->num_rows;
} else {
	$sql = "SELECT id FROM clearance WHERE clearance_type = '$staff_unit' AND status = 'rejected'";
	$rejectedResult = $conn->query($sql);
	$rejectedRes = $rejectedResult->num_rows;
}


// FOR THE CHARTS
$data = [$approvedRes, $pendingRes, $rejectedRes];

$data_json = json_encode($data);


// THIS IS FOR THE HISTORY TABLE

if ($staff_unit === "hod") {
	$sql = "SELECT * FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department'";
	$result = $conn->query($sql);
} else {
	$sql = "SELECT * FROM clearance WHERE clearance_type = '$staff_unit'";
	$result = $conn->query($sql);
}



include "./layout/header.php";
include "./layout/navbar.php";
include "./layout/sidebar.php";

?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="title pb-20">
			<h2 class="h3 mb-0">Welcome <?php echo $staff_fname . " " . $staff_lname ?></h2>
		</div>

		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo $totalRes; ?></div>
							<div class="font-14 text-secondary weight-500">
								Total Clearance
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf">
								<i class="icon-copy bi bi-folder"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo ($approvedRes) ?></div>
							<div class="font-14 text-secondary weight-500">
								Approved Clearance
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#28a745">
								<span class="icon-copy bi bi-folder-check"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo $pendingRes; ?></div>
							<div class="font-14 text-secondary weight-500">
								Pending Clearance
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ffc107">
								<i class="icon-copy bi bi-folder-minus" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark"><?php echo $rejectedRes ?></div>
							<div class="font-14 text-secondary weight-500">Rejected Clearance</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#dc3545">
								<i class="icon-copy bi bi-folder-x" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row pb-10">
			<div class="col-sm-2">
				<div class="card-box" style="height: 400px;"> </div>
			</div>
			<div class="col-sm-8 mb-20" style="height: 400px; position: relative;">
				<div class="card-box height-100-p pd-20" style="position: relative; display: flex; flex-direction: column; justify-content: center;">
					<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
						<div class="h5 mb-md-0">Statistic Clearance Activities</div>
						<div class="form-group mb-md-0">
							<!-- <select class="form-control form-control-sm selectpicker">
									<option value="">Last Week</option>
									<option value="">Last Month</option>
									<option value="">Last 6 Month</option>
									<option value="">Last 1 year</option>
								</select> -->
						</div>
					</div>
					<!-- <div id="activities-chart"></div> -->
					<div class="" style="height: 350px; align-self: center;">
						<div id="chartDashboardstaff" style="width: 450px;"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card-box" style="height: 400px;"> </div>
			</div>

		</div>


		<div class="card-box pb-10">
			<div class="h5 pd-20 mb-0">History</div>
			<table class="table-striped table stripe hover nowrap text-center">
				<thead>
					<tr>
						<th class="">S/N</th>
						<th>Matric Num</th>
						<th class="">Status</th>
						<th>Date Applied</th>
						<th>Documents</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($result->num_rows > 0) :
						$i = 1;
					?>
						<?php while ($row = $result->fetch_assoc()) : ?>
							<tr>
								<td class="table-plus"><?php echo $i++; ?></td>
								<td><?php echo $row['student_matric'] ?></td>
								<td class="row" style="align-items: center; justify-content: center;">
									<div class="make-badge" style="<?php
																	if ($row['status'] == "pending") {
																		echo "background-color: yellow;";
																	}
																	if ($row['status'] == "approved") {
																		echo "background-color: green;";
																	}
																	if ($row['status'] == "rejected") {
																		echo "background-color: tomato;";
																	}

																	?>"> </div> <?php echo $row['status'] ?>
								</td>
								<td class="" style="justify-content: center; text-align: center; align-items: center">
									2024-03-02
								</td>
								<td>
									<a href="#" data-toggle="modal" data-target="<?php echo "#_".$row["id"]."clearance" ?>">
										<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
									</a>


									<?php
									$id = $row['id'];
									include "./components/request/RequestModel.php";
									?>
								</td>
							</tr>
						<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="5">No records...</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
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
<script src="../vendors/scripts/apexcharts-setting.js"></script>

<!-- <script src="../vendors/scripts/dashboard3.js"></script> -->

<script>
	var data = <?php echo $data_json; ?>;

	var options8 = {
		series: data,
		chart: {
			type: 'donut',
		},
		labels: ['Approved', 'Pending', 'Rejected'],
		colors: ['#28a745', '#ffc107', '#dc3545'],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					width: 200
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chartDashboardstaff"), options8);
	chart.render();
</script>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>