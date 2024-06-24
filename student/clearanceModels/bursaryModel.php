<?php ?>

<!-- MODEL START -->

<div class="modal fade library_clearance" id="bursary_clearance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form id="bursaryForm" action="../server/student/clearance/bursary.php" method="post"  enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Bursary Clearance Form
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
            </div>
            <div id="form_message_bursary"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <a href="" class="text-white">
                    <button type="submit" name="submit_bursary" id="submit_bursary" value="submit_bursary" class="btn btn-primary">Applied</button>
                </a>
            </div>
        </form>
    </div>
</div>

<!-- MODEL ENDS -->
 
<script>
    $(document).ready(function() {
        $("#bursaryForm").submit(function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            formData.append('submit_bursary', $('#submit_bursary').val());

            $.ajax({
                url: '../server/student/clearance/bursary.php',
                type: 'POST',
                data: formData, 
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.split(" ")[0].includes('success')) {
                        $("#uploadForm")[0].reset();
                        window.location.href = 'student-dashboard.php';
                    } else {
                        $('#form_message_bursary').html(response);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
                }
                
            });
        })
    })
</script>