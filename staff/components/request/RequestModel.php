<!-- MODEL START -->

<?php

require_once "../server/database.php";

$id = isset($id) ? $id :  "hello world";

$sql = "SELECT * FROM clearance WHERE id = '$id'";
$result_model = $conn->query($sql);

// print_r($result->fetch_assoc());


?>


<div class="modal fade library_clearance" id="<?php echo "_".$id."clearance" ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Clearance Info
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body" style="overflow-y: scroll; height: 75vh;">
                <?php if ($result_model->num_rows > 0) :
                    $row = $result_model->fetch_assoc();
                ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Matric No:</label>
                        <div class="col-sm-9">
                            <input type="text" disabled value="<?php echo $row['student_matric'] ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Apply Date/Time:</label>
                        <div class="col-sm-9">
                            <input type="text" disabled value="<?php echo $row['date'] ?>" class="form-control" />
                        </div>
                    </div>
                    <h4 class="mb-3">Documents Uploaded</h4>
                    <?php if($row['convocation']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Convocation No:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['convocation'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['testimonial']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Testimonial:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['testimonial'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['certificate']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">certificate:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['certificate'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['certificate']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Certificate:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['certificate'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['sta_of_result']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Statement of Result:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['sta_of_result'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['cert_hold']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Certificate Hold:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['cert_hold'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['alumni']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Alumni Receipt:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['alumni'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['o_level']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">O'Level Result:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['o_level'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['result_form']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Result Form:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['result_form'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['res_clear_fr_exam_office']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Result cleared for from exam office:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['res_clear_fr_exam_office'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['library_id_card']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Library ID Card:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['library_id_card'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['disc']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Disc:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['disc'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($row['clearance_form']): ?>
                        <div class=" row">
                            <label class="col-sm-3 col-form-label">Library Clearance form/Project:</label>
                            <div class="col-sm-9">
                                <img src="<?php echo "../uploads/".$row['clearance_form'] ?>" style=" height: 250px; width: 100%; object-fit: contain;" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>

<!-- MODEL ENDS -->