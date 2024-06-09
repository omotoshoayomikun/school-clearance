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
				<h2 class="h3 mb-0">Check Status</h2>
			</div>

			<div class="card-box mb-30">
				<div class="pb-20 pt-20">
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
							<tr>
								<td class="table-plus">1</td>
								<td>Library Clearance</td>
								<td>20-10-2024</td>
								<td class="row" style="align-items: center;">
									<div class="make-badge" style="background-color: green;"> </div> Approved
								</td>
								<td>
									<a href="#" data-toggle="modal" data-target="#library_clearance">
										<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
									</a>


									<!-- MODEL START -->

									<div class="modal fade library_clearance" id="library_clearance" tabindex="-1"
										role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">
														Clearance Info
													</h4>
													<button type="button" class="close" data-dismiss="modal"
														aria-hidden="true">
														×
													</button>
												</div>
												<div class="modal-body" style="overflow-y: scroll; height: 75vh;">
													<div class="form-group row">
														<label class="col-sm-3 col-form-label">Clearance Name:</label>
														<div class="col-sm-9">
															<input type="text" disabled value="Library Clearance"
																class="form-control" />
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-3 col-form-label">Apply Date:</label>
														<div class="col-sm-9">
															<input type="text" disabled value="01-02-2024"
																class="form-control" />
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
									Cleared Successfully
								</td>
							</tr>
							<tr>
								<td class="table-plus">2</td>
								<td>Sport Clearance</td>
								<td>20-10-2024</td>
								<td class="row" style="align-items: center;">
									<div class="make-badge" style="background-color: yellow;"> </div> Pending
								</td>
								<td>

									<a href="#" data-toggle="modal" data-target="#library_clearance">
										<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
									</a>


									<!-- MODEL START -->

									<div class="modal fade library_clearance" id="library_clearance" tabindex="-1"
										role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">
														Clearance Info
													</h4>
													<button type="button" class="close" data-dismiss="modal"
														aria-hidden="true">
														×
													</button>
												</div>
												<div class="modal-body">
													<div class="form-group row">
														<label class="col-sm-3 col-form-label">Matric No:</label>
														<div class="col-sm-9">
															<input type="text" disabled value="Sport Clearance"
																class="form-control" />
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-3 col-form-label">Upload Library ID Card
															1</label>
														<div class="col-sm-9">
															<input type="file" class="form-control" />
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-3 col-form-label">Upload Library ID Card
															2</label>
														<div class="col-sm-9">
															<input type="file" class="form-control" />
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">
														Close
													</button>
													<a href="student-dashboard.html" class="text-white">
														<button type="button" class="btn btn-primary">Applied</button>
													</a>
												</div>
											</div>
										</div>
									</div>

									<!-- MODEL ENDS -->
								</td>
								<td class="text-center">
									Pending
								</td>
							</tr>
							<tr>
								<td class="table-plus">3</td>
								<td>Sport Clearance</td>
								<td>20-10-2024</td>
								<td class="row" style="align-items: center;">
									<div class="make-badge" style="background-color: tomato;"> </div> Rejected
								</td>
								<td>
									<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
								</td>
								<td class="text-center">
									Please reapply it again
								</td>
							</tr>
						</tbody>
					</table>
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