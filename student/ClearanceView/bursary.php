<?php

include '../server/database.php';

$matric_no = $_SESSION['matric_no'];
$disabled = "";

$sql = "SELECT status FROM clearance WHERE student_matric = '$matric_no' AND clearance_type = 'busrsary' AND (status = 'pending' OR status = 'success')";
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
                    <h5 class="card-title">Bursary (Account Section)</h5>
                    <p class="card-text">
                        <label class="make-notice">!</label>
                        Required changing of remita reciept to school reciept
                    </p>
                </div>
                <div class="col-sm-2">
                    <a href="#" data-toggle="modal" data-target="#bursary_clearance">
                        <button type="button" class="btn btn-success text-white form-control">
                            Apply Now
                        </button>
                    </a>

                    <?php
                    include "./clearanceModels/bursaryModel.php";
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>