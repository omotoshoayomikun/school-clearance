<?php
include '../server/database.php';


session_start();
$staff_id = $_SESSION['staff_id'];
$staff_fname = $_SESSION['staff_f_name'];
$staff_unit = $_SESSION['staff_unit'];
$staff_department = $_SESSION['staff_department'];


if ($staff_unit === "hod") {
	$sql = "SELECT * FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department' AND (status = 'pending')";
	$result = $conn->query($sql);
} else {
	$sql = "SELECT * FROM clearance WHERE clearance_type = '$staff_unit' AND (status = 'pending')";
	$result = $conn->query($sql);
}

$title = "Staff Dashboard";

$links = array(
	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);

if (!$_SESSION['staff_id']) {
	header("Location: ./login.php");
}

include "./layout/header.php";
include "./layout/navbar.php";
include "./layout/sidebar.php";

?>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="title pb-20">
			<h2 class="h3 mb-0">Requests</h2>
		</div>


		<div class="card-box pb-10">
			<div class="h5 pd-20 mb-0">Status</div>
			<table class="table-striped table stripe hover nowrap text-center">
				<thead>
					<tr>
						<th class="">S/N</th>
						<th>Matric Num</th>
						<th>Date Applied</th>
						<th>Time</th>
						<th>Documents</th>
						<th>Action</th>
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
								<td class="" style="justify-content: center; text-align: center; align-items: center">
									<?php echo explode(" ", $row['date'])[0] ?>
								</td>
								<td class="" style="justify-content: center; text-align: center; align-items: center">
									<?php echo explode(" ", $row['date'])[1] ?>
								</td>
								<td>
									<a href="#" data-toggle="modal" data-target="<?php echo "#_" . $row["id"] . "clearance" ?>">
										<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
									</a>
									<div>
										<?php
										$id = $row['id'];
										include "./components/request/RequestModel.php";
										?>

									</div>
								</td>
								<td class="text-center">
									<div class="dropdown">
										<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="dw dw-more"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
											<a class="dropdown-item" href="#" data-param1="<?php echo $row['id'] ?>" id="handleApproved"><i class="dw dw-edit2"></i> Approved</a>
											<a class="dropdown-item" data-toggle="modal" data-target="<?php echo "#_".$row['id']."reject_model" ?>" href="#"><i class="dw dw-delete-3"></i> Reject</a>

										</div>

										<?php
										 $stu_dent_id = $row['id'];
										include "./components/request/RejectModel.php";
										?>



									</div>
								</td>
							</tr>
						<?php endwhile; ?>

					<?php else : ?>
						<tr>
							<td colspan="6">No request...</td>
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

<script>
	$(document).ready(function() {
		$(document).on("click", "#handleApproved", function(e) {
			const param1 = $(this).data("param1");
			const formData = new FormData();
			formData.append("id", param1);
			formData.append("action", "approved");

			$.ajax({
				url: "../server/staff/request.php",
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				success: function(response) {
					if (response.split(" ")[0].includes('success')) {
						location.reload();


					} else {
						$('#output').html(response);
						console.log(response)
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
<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="../vendors/scripts/apexcharts-setting.js"></script>

<!-- <script src="../vendors/scripts/dashboard3.js"></script> -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>