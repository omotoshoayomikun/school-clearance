<?php

include '../server/database.php';

session_start();
$matric_no = $_SESSION['matric_no'];

$title = "DeskApp - Bootstrap Admin Dashboard HTML Template";
$links = array(

	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);

// echo $_SESSION['matric_no'];

require_once './layout/header.php';
include './layout/navbar.php';
include './layout/sidebar.php';


// TO GET THE NUMBERS OF ROWS FOR PENDING
$sql = "SELECT id FROM clearance WHERE student_matric = '$matric_no' AND status = 'pending'";
$pendingResult = $conn->query($sql);
$pendingRes = $pendingResult->num_rows;

// TO GET THE NUMBERS OF ROWS FOR approved
$sql = "SELECT id FROM clearance WHERE student_matric = '$matric_no' AND status = 'approved'";
$approvedResult = $conn->query($sql);
$approvedRes = $approvedResult->num_rows;

// TO GET THE NUMBERS OF ROWS FOR REJECTED
$sql = "SELECT id FROM clearance WHERE student_matric = '$matric_no' AND status = 'rejected'";
$rejectedResult = $conn->query($sql);
$rejectedRes = $rejectedResult->num_rows;

// THIS IS FOR THE STATUS TABLE
$sql = "SELECT clearance_type, date, status, feedback FROM clearance WHERE student_matric = '$matric_no'";
$result = $conn->query($sql);

// FOR THE CHARTS
$data = [$approvedRes, $pendingRes, $rejectedRes];

$data_json = json_encode($data);

?>

<!-- <div class="mobile-menu-overlay"></div> -->

<div class="main-container" style="padding-top: 20px;">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="title pb-20">
			<h2 class="h3 mb-0">Welcome! <?php echo $_SESSION['matric_no']; ?></h2>
		</div>

		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">8</div>
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
						<div id="chartDashboard" style="width: 450px;"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card-box" style="height: 400px;"> </div>
			</div>

		</div>

		<div class="card-box mb-30">
			<div class="title ml-10 pb-4">
				<h2 class="h3 mb-0">Check Status</h2>
			</div>
			<div class="pb-20 pt-4">
				<table class="table-striped table stripe hover nowrap text-center">
					<thead>
						<tr>
							<th class="">S/N</th>
							<th class="">Clearance Type</th>
							<th>Date Applied</th>
							<th>Status</th>
							<th>Info</th>
							<th>Feedback</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($result->num_rows > 0) :
							$i = 1;
						?>
							<?php while ($row = $result->fetch_assoc()) : ?>
								<tr>
									<td class="table-plus"><?php echo $i++; ?></td>
									<td><?php echo $row['clearance_type'] ?></td>
									<td><?php echo ($row['date']) ?></td>
									<td class="row" style="align-items: center;">
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
									<td>
										<a href="#" data-toggle="modal" data-target="#library_clearance">
											<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
										</a>


										<!-- MODEL START -->

										<div class="modal fade library_clearance" id="library_clearance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myLargeModalLabel">
															Clearance Info
														</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
															×
														</button>
													</div>
													<div class="modal-body" style="overflow-y: scroll; height: 75vh;">
														<div class="form-group row">
															<label class="col-sm-3 col-form-label">Clearance Name:</label>
															<div class="col-sm-9">
																<input type="text" disabled value="Library Clearance" class="form-control" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-3 col-form-label">Apply Date:</label>
															<div class="col-sm-9">
																<input type="text" disabled value="01-02-2024" class="form-control" />
															</div>
														</div>
														<h4 class="mb-3">Documents Uploaded</h4>
														<div class=" row">
															<label class="col-sm-3 col-form-label"></label>
															<div class="col-sm-9" style="">
																<img src="../vendors/images/id_card.png" style=" height: 250px; width: 100%;" alt="">
																<label class="col-sm-3 col-form-label">Front view of Library ID Card:</label>
															</div>
														</div>
														<div class="row">
															<label class="col-sm-3 col-form-label"></label>
															<div class="col-sm-9" style="">
																<img src="../vendors/images/id_card.png" style=" height: 250px; width: 100%;" alt="">
																<label class="col-sm-3 col-form-label">Back view of Library ID Card:</label>
															</div>
														</div>

													</div>

												</div>
											</div>
										</div>

										<!-- MODEL ENDS -->
									</td>
									<td class="text-center">
										<?php echo $row['feedback'] ?>
									</td>
								</tr>
							<?php endwhile; ?>
						<?php else : ?>
							<tr>
								<td colspan="6">You've not submitted any clearance...</td>
							</tr>
						<?php endif; ?>

					</tbody>
				</table>
			</div>
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
<!-- <script src="../vendors/scripts/apexcharts-setting.js"></script> -->
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
	var chart = new ApexCharts(document.querySelector("#chartDashboard"), options8);
	chart.render();
</script>

<!-- <script src="../vendors/scripts/dashboard3.js"></script> -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>