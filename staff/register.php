<?php


$title = "Staff Registration";
$bodyStyle = "login-page";
$links = array(
	0 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/jquery-steps/jquery.steps.css", "type" => "text/css"),
);
require_once './layout/header.php';

?>

<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-6">
				<img src="../vendors/images/register-page-img.png" alt="" />
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="register-box bg-white box-shadow border-radius-10">
					<form id="staff_form" action="" class="wizard-circle">
						<h5 class="mb-5 mt-2 text-danger text-center">Staff Account Credentials</h5>
						<section class="mt-4">
							<div class="form-wrap max-width-600 mx-auto">
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Staff Id*</label>
									<div class="col-sm-8">
										<input type="text" name="staff_id" id="staff_id" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">First Name*</label>
									<div class="col-sm-8">
										<input type="text" name="f_name" id="f_name" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Middle Name*</label>
									<div class="col-sm-8">
										<input type="text" name="m_name" id="m_name" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Last Name*</label>
									<div class="col-sm-8">
										<input type="text" name="l_name" id="l_name" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Unit*</label>
									<div class="col-sm-8">
										<select name="unit" id="unit" class="form-control selectpicker" title="Select Unit">
											<option value="library">Library</option>
											<option value="academic">Academic</option>
											<option value="hod">Hod</option>
											<option value="bursary">Bursary</option>
											<option value="alumni">Alumni</option>
											<option value="hostel">Hostel</option>
											<option value="liasion">Liasion</option>
											<option value="security">Security</option>
											<option value="sport">Sport</option>
										</select>
									</div>
								</div>
								<div id="dep_toggle" class="form-group row ds_none">
									<label class="col-sm-4 col-form-label">Department*</label>
									<div class="col-sm-8">
										<select name="department" id="department" class="form-control selectpicker" title="Select Department">
											<optgroup label="School of Applied Sciences">
												<option value="Food Science and Technology">Food Science and Technology</option>
												<option value="Statistics">Statistics</option>
												<option value="Hospitality Management">Hospitality Management</option>
												<option value="Geological Technology">Geological Technology</option>
											</optgroup>
											<optgroup label="School of Science and Technology">
												<option value="Agricultural Technology">Agricultural Technology</option>
												<option value="Science Laboratory Technology">Science Laboratory Technology</option>
											</optgroup>
											<optgroup label="School of Computing">
												<option value="Computer Science">Computer Science</option>
												<option value="⁠Artificial Intelligence">⁠Artificial Intelligence</option>
												<option value="⁠Software and Web Development">⁠Software and Web Development</option>
												<option value="Networking and Cloud Computing">Networking and Cloud Computing</option>
												<option value="⁠Cybersecurity">⁠Cybersecurity</option>
											</optgroup>
											<optgroup label="School of Marketing">
												<option value="Accountancy">Accountancy</option>
												<option value="⁠Banking and Finance">Banking and Finance</option>
												<option value="Insurance">⁠Insurance</option>
											</optgroup>
											<optgroup label="School of Administrative and Business Studies">
												<option value="Business Administration">Business Administration</option>
												<option value="Marketing">Marketing</option>
												<option value="Procurement and Supply Chain Management">Procurement and Supply Chain Management</option>
												<option value="Public Administration">Public Administration</option>
												<option value="Local Government Studies">Local Government Studies</option>
												<option value="Human Resources and Industrial Relation">Human Resources and Industrial Relation</option>
											</optgroup>
											<optgroup label="School of Communication and Media Studie">
												<option value="Mass Communication">Mass Communication</option>
											</optgroup>
											<optgroup label="School of Information Technology">
												<option value="Library and Information Science">Library and Information Science</option>
												<option value="Office Technology Management">Office Technology Management</option>
											</optgroup>
											<optgroup label="School of Natural Resources Engineering">
												<option value="Agricultural and Bio Environmental Engineering">Agricultural and Bio Environmental Engineering</option>
												<option value="Civil Engineering">Civil Engineering</option>
											</optgroup>
											<optgroup label="School of Industrial Engineering Technology">
												<option value="Computer Engineering Technology">Computer Engineering Technology</option>
												<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
												<option value="Mechatronics Engineering Technology">Mechatronics Engineering Technology</option>
												<option value="Railway Engineering Technology">Railway Engineering Technology</option>
												<option value="Renewable Engineering Technology">Renewable Engineering Technology</option>
											</optgroup>
											<optgroup label="School of Environmental Technology">
												<option value="Architectural Technology">Architectural Technology</option>
												<option value="Building Technology">Building Technology</option>
												<option value="Quantity Surveying">Quantity Surveying</option>
												<option value="Urban and Regional Planning">Urban and Regional Planning</option>
												<option value="Estate Management and Valuation">Estate Management and Valuation</option>
												<option value="Surveying and Geo - Informatics">Surveying and Geo - Informatics</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="form-group row align-items-center">
									<label class="col-sm-4 col-form-label">Gender*</label>
									<div class="col-sm-8">
										<div class="custom-control custom-radio custom-control-inline pb-0" style="display: none">
											<input type="radio" id="" value="" name="gender" class="custom-control-input" checked />
											<label class="custom-control-label" for="male"></label>
										</div>
										<div class="custom-control custom-radio custom-control-inline pb-0">
											<input type="radio" id="male" value="male" name="gender" class="custom-control-input" />
											<label class="custom-control-label" for="male">Male</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline pb-0">
											<input type="radio" id="female" value="female" name="gender" class="custom-control-input" />
											<label class="custom-control-label" for="female">Female</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">
										<input type="password" name="p_word" id="p_word" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" name="p_word_con" id="p_word_con" class="form-control" />
									</div>
								</div>
								<div class="custom-control custom-checkbox mt-4">
									<input type="checkbox" class="custom-control-input" id="customCheck1" />
									<label class="custom-control-label" for="customCheck1">I have read and
										agreed to the terms of services and
										privacy policy</label>
								</div>
								<div class="mt-2" id="output"></div>
								<div class="form-group mt-2">
									<a href="">
										<button type="submit" value="submit_reg" name="submit_reg" id="submit_reg" class="btn btn-danger text-white form-control">Register</button>
									</a>
								</div>

							</div>

						</section>
					</form>

				</div>
			</div>
		</div>
	</div>
	<?php

	$heading = "Registration Successful";
	$body = "You have successfully registered! Please proceed to login.";
	$link = "./login.php";

	include './components/model.php';
	?>
</div>

<script>
	$(document).ready(function() {

		$("#unit").change(function() {
			if ($("#unit").val() === "hod") {
				$("#dep_toggle").css("display", "flex");
			} else {
				$("#dep_toggle").css("display", "none");
				$("#department").val("");
			}
		})


		$("#staff_form").submit(function(event) {
			event.preventDefault();

			var formData = new FormData(this);
			formData.append('submit_reg', $("#submit_reg").val());

			$.ajax({
				url: "../server/staff/registration.php",
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				success: function(response) {
					if (response.split(" ")[0].includes('success')) {
						$("#staff_form")[0].reset();
						$("#dep_toggle").css("display", "none");
						$("#department").val("");
						$('#successModal').modal('show');
						// window.location.href = 'student-dashboard.php';
					} else {
						$('#output').html(response);
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
				}
			})
		})
	})
</script>


<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<script src="../src/plugins/jquery-steps/jquery.steps.js"></script>
<!-- <script src="../vendors/scripts/steps-setting.js"></script> -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>