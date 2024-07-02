<?php
include '../server/database.php';

session_start();


if (!$_SESSION['matric_no']) {
	header("Location: ./login.php");
}

$title = "Student - Status Page";
$links = array(

	2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
	5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);
require_once './layout/header.php';
include './layout/navbar.php';
include './layout/sidebar.php';


$matric_no = $_SESSION['matric_no'];

$sql = "SELECT * FROM clearance WHERE student_matric = '$matric_no'";
$result = $conn->query($sql);


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
						<?php if ($result->num_rows > 0) :
							$i = 1;
						?>
							<?php while ($row = $result->fetch_assoc()) : ?>
								<tr>
									<td class="table-plus"><?php echo $i++; ?></td>
									<td><?php echo $row['clearance_type'] ?></td>
									<td><?php echo ($row['date']) ?></td>
									<td class="row" style="align-items: center;">
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
									<td>
										<a href="#" data-toggle="modal" data-target="<?php echo "#_".$row["id"]."clearance" ?>">
											<i class="icon-copy bi bi-file-earmark-richtext" style="font-size: 25px;"></i>
										</a>

										<div>
											<?php 
											$id = $row['id'];
											include "../staff/components/request/RequestModel.php";
											?>
										</div>
									</td>
									<td class="text-center">
										<?php echo $row['feedback'] ?>
									</td>
								</tr>
							<?php endwhile; ?>
						<?php else : ?>
							<tr>
								<td colspan="6">You've not submitted any clearance...</td>
							</tr>
						<?php endif; ?>

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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>