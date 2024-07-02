<?php
include '../server/database.php';

session_start();
$staff_id = $_SESSION['staff_id'];
$staff_fname = $_SESSION['staff_f_name'];
$staff_unit = $_SESSION['staff_unit'];
$staff_department = $_SESSION['staff_department'];

$title = "Staff Dashboard";

$links = array(
	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);

if (!$_SESSION['staff_id']) {
	header("Location: ./login.php");
}


if ($staff_unit === "hod") {
	$sql = "SELECT * FROM clearance WHERE clearance_type = 'hod' AND department = '$staff_department'";
	$result = $conn->query($sql);
} else {
	$sql = "SELECT * FROM clearance WHERE clearance_type = '$staff_unit'";
	$result = $conn->query($sql);
}

include "./layout/header.php";
include "./layout/navbar.php";
include "./layout/sidebar.php";

?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="title pb-20">
			<h2 class="h3 mb-0">History</h2>
		</div>


		<div class="card-box pb-10">
			<div class="h5 pd-20 mb-0">
				<div style="display: flex; align-items: center; gap: 20px; width: 100%;">
					<h5>Filter By:</h5>
					<div  style="display: flex; align-items: center; gap: 20px; justify-content: space-between;">
						<div>
							<input class="form-control form-control-sm" style="width: 150px;" placeholder="Matric No" type="text" name="search_matric" id="search_matric" />
						</div>
						<h5>:</h5>
						<select name="" id="" class="custom-select custom-select-sm form-control form-control-sm" style="width: 120px;">
							<option value="">All</option>
							<option value="approved">Approved</option>
							<option value="pending">pending</option>
							<option value="reject">Reject</option>
						</select>

					</div>
				</div>
			</div>
			<table class="table-striped table stripe hover nowrap text-center">
				<thead>
					<tr>
						<th class="">S/N</th>
						<th>Matric Num</th>
						<th class="">Status</th>
						<th>Date Applied</th>
						<th>Documents</th>
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
								<td class="row" style="align-items: center; justify-content: center;">
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
								<td class="" style="justify-content: center; text-align: center; align-items: center">
									2024-03-02
								</td>
								<td>
									<a href="#" data-toggle="modal" data-target="<?php echo "#_".$row["id"]."clearance" ?>">
										<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
									</a>

									<?php
									$id = $row['id'];
									include "./components/request/RequestModel.php";
									?>
								</td>
							</tr>
						<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="5">No records...</td>
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