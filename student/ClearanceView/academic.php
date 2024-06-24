<?php

include '../server/database.php';

$matric_no = $_SESSION['matric_no'];
$disabled = "";

$sql = "SELECT status FROM clearance WHERE student_matric = '$matric_no' AND clearance_type = 'academic affairs' AND (status = 'pending' OR status = 'approved')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$disabled = "disabled";
}

?>

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
						<button type="button" class="btn btn-success text-white form-control" <?php echo $disabled; ?>>
							Apply Now
						</button>
					</a>
					<!-- ACADEMIC MODEL -->
					<?php include './clearanceModels/academicModel.php' ?>
					<!-- END OF ACADEMIC MODEL -->
				</div>
			</div>

		</div>
	</div>
</div>