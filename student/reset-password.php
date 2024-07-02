<?php
include '../server/database.php';
session_start();

$matric_no = $_SESSION['matric_no'];
if (!$_SESSION['matric_no']) {
	header("Location: ./login.php");
}


$title = "Student - Reset Password";
$links = array(

	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);
require_once './layout/header.php';

?>
<div class="login-header box-shadow">
	<div class="container-fluid d-flex justify-content-between align-items-center">
		<div class="brand-logo">
			<a href="login.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" />
			</a>
		</div>
		<div class="login-menu">
			<ul>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<img src="../vendors/images/forgot-password.png" alt="" />
			</div>
			<div class="col-md-6">
				<div class="login-box bg-white box-shadow border-radius-10">
					<div class="login-title">
						<h2 class="text-center text-primary">Reset Password</h2>
					</div>
					<h6 class="mb-20">Enter your new password, confirm and submit</h6>
					<form id="stu_reset_form" action="" method="POST">
						<div class="input-group custom">
							<input type="text" name="p_word" id="p_word" class="form-control form-control-lg" placeholder="New Password" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="text" name="confirm_pass" id="confirm_pass" class="form-control form-control-lg" placeholder="Confirm New Password" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
						<div class="row align-items-center">
							<div class="col-5">
								<div class="input-group mb-0">
									<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										-->
									<!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Submit</a> -->
									<button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary text-white form-control">Submit</button>
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
		$("#stu_reset_form").submit(function(e) {
			e.preventDefault();

			var formData = new FormData(this);

			$.ajax({
				url: "../server/student/reset-password.php",
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				success: function(response) {
					if (response.split(" ")[0].includes('success')) {
						console.log("Reset success message")
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


<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>