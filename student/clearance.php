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
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Institution of Continuing Education</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									Academic Affairs: Required changing of remita reciept to school reciept,Alumni
									receipt, O'Level result, processing of result form with #300
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#academic_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<div class="modal fade library_clearance" id="academic_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Academic Affairs
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Convocation Receipt</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Testimonial Receipt</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Certificate Receipt
														(HND/ND)</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Statement of Result</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Certificate Hold</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Alumni Receipt</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">O'Level Result</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Result Form</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Student Main Department</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									HOD: Required result cleared from exam office
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#hod_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<div class="modal fade library_clearance" id="hod_clearance" tabindex="-1" role="dialog"
									aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													HOD
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Result cleared for from exam
														office:</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Polytechnic Library</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									Library: Required library ID card, DISC and library form/project
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#library_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<div class="modal fade library_clearance" id="library_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Library Clearance Form
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Library ID Card
														1</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">DISC</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Library Clearance
														form/Project</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Industrial Liaison Office</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									<!-- Academic Affairs: Required changing of remita reciept to school reciept,Alumni receipt, O'Level result, processing of result form with #300 -->
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#industrial_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<!-- <div class="modal fade library_clearance" id="industrial_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Industrial Liaison Office
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
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
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
													Close
												</button>
												<a href="student-dashboard.html" class="text-white">
													<button type="button" class="btn btn-primary">Applied</button>
												</a>
											</div>
										</div>
									</div>
								</div> -->

								<!-- MODEL ENDS -->
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Bursary (Account Section)</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									Required changing of remita reciept to school reciept
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#bursary_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<div class="modal fade library_clearance" id="bursary_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Bursary Clearance Form
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Convocation Receipt</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Testimonial Receipt</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Certificate Receipt
														(HND/ND)</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Statement of Result</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Certificate Hold</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Sport Unit</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									Clearance form with #200
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#sport_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<div class="modal fade library_clearance" id="sport_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Sport Clearance Form
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Clearance Form</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Alumni Office</h5>
								<p class="card-text">
									<label class="make-notice">!</label>
									Required changing of remita reciept to school reciept
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#Alumni_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<div class="modal fade library_clearance" id="Alumni_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Alumni Clearance Form
												</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Alumni Receipt</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Clearance Form</label>
													<div class="col-sm-9">
														<input type="file" class="form-control" />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Hostel Unit</h5>
								<p class="card-text">
									<!-- <label class="make-notice">!</label> -->
									<!-- Library: Required changing of remita reciept to school reciept -->
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#hostel_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<!-- <div class="modal fade library_clearance" id="library_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Library Clearance Form
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
														<input type="text" value="CS/HND/F22/1122" disabled
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
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
													Close
												</button>
												<a href="student-dashboard.html" class="text-white">
													<button type="button" class="btn btn-primary">Applied</button>
												</a>
											</div>
										</div>
									</div>
								</div> -->

								<!-- MODEL ENDS -->
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Security Unit</h5>
								<p class="card-text">
									<!-- <label class="make-notice">!</label> -->
									<!-- Library: Required changing of remita reciept to school reciept -->
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#security_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

								<!-- MODEL START -->

								<!-- <div class="modal fade library_clearance" id="security_clearance" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Library Clearance Form
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
														<input type="text" value="CS/HND/F22/1122" disabled
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
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
													Close
												</button>
												<a href="student-dashboard.html" class="text-white">
													<button type="button" class="btn btn-primary">Applied</button>
												</a>
											</div>
										</div>
									</div>
								</div> -->

								<!-- MODEL ENDS -->
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-success form-control text-white">  <i class="icon-copy bi bi-app-indicator"></i> Apply For Clearance</button>
			</div>
			<!-- <div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Library Clearance</h5>
								<p class="card-text">
									This is for the library, which give you the access to clear the sport clearance
								</p>
							</div>
							<div class="col-sm-2">
								<a href="#" data-toggle="modal" data-target="#library_clearance">
									<button type="button" class="btn btn-success text-white form-control">
										Apply Now
									</button>
								</a>

							</div>
						</div>

					</div>
				</div>
			</div> -->
			<!-- <div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">Sport Clearance</h5>
								<p class="card-text">
									This is for the library, which give you the access to clear the sport clearance
								</p>
							</div>
							<div class="col-sm-2">
								<button type="button" disabled class="btn btn-secondary text-white form-control">
									Approved
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="card card-box">
					<div class="card-body">
						<div class="row" style="align-items: center;">
							<div class="col-sm-10">
								<h5 class="card-title">HOD Clearance</h5>
								<p class="card-text">
									This is for the library, which give you the access to clear the sport clearance
								</p>
							</div>
							<div class="col-sm-2">
								<button type="button" disabled class="btn btn-warning text-white form-control">
									Pending
								</button>
							</div>
						</div>

					</div>
				</div>
			</div> -->

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
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>