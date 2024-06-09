<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css" />
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
		crossorigin="anonymous"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class="login-page">
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-6">
					<img src="../vendors/images/register-page-img.png" alt="" />
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="register-box bg-white box-shadow border-radius-10">
						<form action="" class="wizard-circle"></form>
						<h5 class="mb-5 mt-2 text-danger text-center">Staff Account Credentials</h5>
						<section class="mt-4">
							<div class="form-wrap max-width-600 mx-auto">
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Staff Id*</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">First Name*</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Middle Name*</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Last Name*</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Unit*</label>
									<div class="col-sm-8">
										<select class="form-control selectpicker" title="Select Unit">
											<option value="Library">Library</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Department*</label>
									<div class="col-sm-8">
										<select class="form-control selectpicker" title="Select Department">
											<option value="Computer Science">Computer Science</option>
										</select>
									</div>
								</div>
								<div class="form-group row align-items-center">
									<label class="col-sm-4 col-form-label">Gender*</label>
									<div class="col-sm-8">
										<div class="custom-control custom-radio custom-control-inline pb-0">
											<input type="radio" id="male" name="gender" class="custom-control-input" />
											<label class="custom-control-label" for="male">Male</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline pb-0">
											<input type="radio" id="female" name="gender"
												class="custom-control-input" />
											<label class="custom-control-label" for="female">Female</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" />
									</div>
								</div>
								<div class="custom-control custom-checkbox mt-4">
									<input type="checkbox" class="custom-control-input" id="customCheck1" />
									<label class="custom-control-label" for="customCheck1">I have read and
										agreed to the terms of services and
										privacy policy</label>
								</div>
								<div class="form-group mt-5">
									<a href="staff-dashboard.html">
										<button type="button" class="btn btn-danger text-white form-control">Register</button>
									</a>
								</div>

							</div>

						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal"
		data-backdrop="static">
		Launch modal
	</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center">
						<img src="../vendors/images/success.png" />
					</div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
					eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/jquery-steps/jquery.steps.js"></script>
	<!-- <script src="../vendors/scripts/steps-setting.js"></script> -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>