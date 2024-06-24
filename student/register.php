<?php

$title = "Student Registration";
$bodyStyle = "login-page";
$links = array(
	0 => array("rel" => "apple-touch-icon", "sizes" => "180x180", "href" => "../vendors/images/apple-touch-icon.png", "type" => ""),
	1 => array("rel" => "icon", "sizes" => "32x32", "href" => "../vendors/images/favicon-32x32.png", "type" => "image/png"),
	2 => array("rel" => "icon", "sizes" => "", "href" => "../vendors/images/favicon-16x16.png", "type" => "image/png"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/jquery-steps/jquery.steps.css", "type" => "text/css"),
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
					<form action="" class="wizard-circle"></form>
					<h5 class="mb-5">Basic Account Credentials</h5>
					<form method="post" action="../server/student/registration.php" class="mt-3">
						<div class="form-wrap max-width-600 mx-auto">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Matric No*</label>
								<div class="col-sm-8">
									<input type="text" name="matric_no" id="matric_no" class="form-control" />
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
								<label class="col-sm-4 col-form-label">Department*</label>
								<div class="col-sm-8">
									<select name="department" id="department" class="form-control" title="Select Department">
										<option value="">Select Department</option>
										<option value="computer science">Computer Science</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Level*</label>
								<div class="col-sm-8">
									<select name="level" id="level" class="form-control" title="Select Level">
										<option value="">Select Level</option>
										<option value="ND II">ND II</option>
										<option value="HND II">HND II</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Year*</label>
								<div class="col-sm-8">
									<select name="year" id="year" class="form-control" title="Select Level">
										<option value="">Select Level</option>
										<option value="2024">2024</option>
										<option value="2023">2023</option>
										<option value="2022">2022</option>
										<option value="2021">2021</option>
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
									<input type="password" name="confirm_password" id="confirm_password" class="form-control" />
								</div>
							</div>
							<div class="custom-control custom-checkbox mt-4">
								<input type="checkbox" class="custom-control-input" id="customCheck1" />
								<label class="custom-control-label" for="customCheck1">I have read and
									agreed to the terms of services and
									privacy policy</label>
							</div>
							<h2 class="text-danger text-center fs-1 fw-bold" id="form_message"></h2>
							<div class="form-group mt-3">
								<!-- <a href="student-dashboard.html"> -->
								<button type="submit" name="submit" id="submit" class="btn btn-primary text-white form-control">Register</button>
								<!-- </a> -->
							</div>
						</div>

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
		$("form").submit(function(event) {
			event.preventDefault();
			var matric_no = $("#matric_no").val();
			var f_name = $("#f_name").val();
			var m_name = $("#m_name").val();
			var l_name = $("#l_name").val();
			var department = $("#department").val();
			var level = $("#level").val();
			var year = $("#year").val();
			var gender = $('input[name="gender"]:checked').val();
			var p_word = $("#p_word").val();
			var confirm_password = $("#confirm_password").val();
			var submit = $("#submit").val()

			$('#form_message').load("../server/student/registration.php", {
				matric_no: matric_no,
				f_name: f_name,
				m_name: m_name,
				l_name: l_name,
				department: department,
				level: level,
				year: year,
				gender: gender,
				p_word: p_word,
				confirm_password: confirm_password,
				submit: submit
			}, function(response, status, xhr) {
				if (status === "success") {
					if (response.split(" ")[0].includes('success') ) {
						$('#successModal').modal('show');
						$("#matric_no").val('');
						$("#f_name").val('');
						$("#m_name").val('');
						$("#l_name").val('');
						$("#department").val('');
						$("#level").val('');
						$("#year").val('');
						$('input[name="gender"]:checked').prop('checked', false); // Uncheck the radio button
						$("#p_word").val('');
						$("#confirm_password").val('');

						$('#form_message').html('');
					} else {
						$('#form_message').html(response);
					}
				} else {
					$('#form_message').html(response);
				}
			})
		})
	})
</script>
<!-- js -->
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