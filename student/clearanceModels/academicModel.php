<?php

?>


<!-- MODEL START -->

<div class="modal fade" id="academic_clearance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form id="academicForm" action="../server/student/clearance/academic.php" method="post" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Academic Affairs
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Convocation Receipt</label>
                    <div class="col-sm-9">
                        <input type="file" name="convocation" id="convocation" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Testimonial Receipt</label>
                    <div class="col-sm-9">
                        <input type="file" name="testimonial" id="testimonial" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Certificate Receipt
                        (HND/ND)</label>
                    <div class="col-sm-9">
                        <input type="file" name="certificate" id="certificate" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Statement of Result</label>
                    <div class="col-sm-9">
                        <input type="file" name="sta_of_result" id="sta_of_result" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Certificate Hold</label>
                    <div class="col-sm-9">
                        <input type="file" name="cert_hold" id="cert_hold" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alumni Receipt</label>
                    <div class="col-sm-9">
                        <input type="file" name="alumni" id="alumni" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">O'Level Result</label>
                    <div class="col-sm-9">
                        <input type="file" name="o_level" id="o_level" accept="image/*" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Result Form</label>
                    <div class="col-sm-9">
                        <input type="file" name="result_form" id="result_form" accept="image/*" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="" id="" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <a href="student-dashboard.html" class="text-white">
                    <button type="submit" name="academic" id="academic" value="academic" class="btn btn-primary">Applied</button>
                </a>
            </div>
            <div id="form_message"></div>
        </form>
    </div>
</div>

<!-- MODEL ENDS -->

<script>
    $(document).ready(function() {
        $("#academicForm").submit(function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            formData.append('academic', $('#academic').val());


            $.ajax({
                url: '../server/student/clearance/academic.php',
                type: 'POST',
                data: formData, 
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.split(" ")[0].includes('success')) {
                        $("#uploadForm")[0].reset();
                        window.location.href = 'student-dashboard.php';
                    } else {
                        $('#form_message').html(response);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
                }
                
            });
        })
    })
</script>