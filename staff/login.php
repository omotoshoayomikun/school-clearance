<?php


$title = "Staff Registration";
$bodyStyle = "login-page";
$links = array(
	0 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/jquery-steps/jquery.steps.css", "type" => "text/css"),
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
						<h5 class="text-center text-danger">Staff login To Your Dashboard</h5>
					</div>
					<form id="staff_login_form">
						<div class="input-group custom">
							<input type="text" name="staff_id" id="staff_id" class="form-control form-control-lg" placeholder="Staff ID" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="password" name="p_word" id="p_word" class="form-control form-control-lg" placeholder="**********" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
						<div class="row pb-30">
							<div class="col-6">
								<!-- <div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div> -->
							</div>
							<div class="col-6">
								<div class="forgot-password">
									<a href="forgot-password.html">Forgot Password</a>
								</div>
							</div>
						</div>
						<div class="mt-1 mb-1" id="output_log"></div>
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
									<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
									<button type="submit" name="staff_login" id="staff_login" value="staff_login" class="btn btn-danger btn-lg btn-block" href="staff-dashboard.html">Sign In</button>
								</div>
								<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
									OR
								</div>
								<div class="input-group mb-0">
									<a class="btn btn-outline-danger btn-lg btn-block" href="register.html">Register To Create Account</a>
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
		$("#staff_login_form").submit(function(event) {
			event.preventDefault();

			var formData = new FormData(this);
			formData.append('staff_login', $("#staff_login").val());

			
			$.ajax({
				url: "../server/staff/login.php",
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				success: function(response) {
					console.log(response)
					if (response.split(" ")[0].includes('success')) {
						$("#staff_login_form")[0].reset();
						window.location.href = 'staff-dashboard.php';
					} else {
						$('#output_log').html(response);
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
				}
			})
		})
	});
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