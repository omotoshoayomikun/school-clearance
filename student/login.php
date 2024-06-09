<?php

$title = "Login Page";
$bodyStyle = "login-page";
$links = array(
	0 => array("rel" => "apple-touch-icon", "sizes" => "180x180", "href" => "../vendors/images/apple-touch-icon.png", "type" => ""),
	1 => array("rel" => "icon", "sizes" => "32x32", "href" => "../vendors/images/favicon-32x32.png", "type" => "image/png"),
	2 => array("rel" => "icon", "sizes" => "", "href" => "../vendors/images/favicon-16x16.png", "type" => "image/png"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/jquery-steps/jquery.steps.css", "type" => "text/css"),
);
require_once './layout/header.php';
?>

<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-7">
				<img src="../vendors/images/login-page-img.png" alt="" />
			</div>
			<div class="col-md-6 col-lg-5">
				<div class="login-box bg-white box-shadow border-radius-10">
					<div class="login-title">
						<h5 class="text-center text-primary">Student login To Your Dashboard</h5>
					</div>
					<form method="post" action="../server/student/login.php">
						<div class="input-group custom">
							<input type="text" id="matric_no" name="matric_no" class="form-control form-control-lg" placeholder="Matric No" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="password" id="p_word" name="p_word" class="form-control form-control-lg" placeholder="**********" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>

						<!-- TO PRINT OUT OUT FROM SERVER -->
						<h4 class="text-danger text-center fs-1 fw-bold mb-1" id="form_message"></h4>

						<!-- $$$$$$$$$$$$$$ -->

						<div class="row pb-30">
							<div class="col-6">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1" />
									<label class="custom-control-label" for="customCheck1">Remember</label>
								</div>
							</div>
							<div class="col-6">
								<div class="forgot-password">
									<a href="forgot-password.html">Forgot Password</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
								<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
									<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
									<!-- <a class="btn btn-primary btn-lg btn-block" href="student-dashboard.html">Sign In</a> -->
								</div>
								<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
									OR
								</div>
								<div class="input-group mb-0">
									<a class="btn btn-outline-primary btn-lg btn-block" href="register.php">Register To Create Account</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- js -->

<script>
	$(document).ready(function() {
		$("form").submit(function(event) {
			event.preventDefault();
			var matric_no = $("#matric_no").val();
			var p_word = $("#p_word").val();
			var submit = $("#submit").val()

			$('#form_message').load("../server/student/login.php", {
				matric_no: matric_no,
				p_word: p_word,
				submit: submit
			}, function(response, status, xhr) {
				if (status === "success") {
					if (response.split(" ")[0].includes('success')) {
						$("#matric_no").val('');
						$("#p_word").val('');

						$('#form_message').html('');
						window.location.href = 'student-dashboard.php';
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


<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>