<?php ?>

<!-- MODEL START -->

<div class="modal fade" id="library_clearance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <form id="libraryForm" action="../server/student/clearance/library.php" method="post"  enctype="multipart/form-data" class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Library Clearance Form
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Library ID Card</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="library_id_card" id="library_id_card" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">DISC</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="disc" id="disc" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Library Clearance
                        form/Project</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="clearance_form" id="clearance_form" />
                    </div>
                </div>
            </div>
            <div id="form_message_library"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <a href="" class="text-white">
                    <button type="submit" name="submit_library" id="submit_library" value="submit_library" class="btn btn-primary">Applied</button>
                </a>
            </div>
</form>
    </div>
</div>

<!-- MODEL ENDS -->

<script>
    $(document).ready(function() {
        $("#libraryForm").submit(function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            formData.append('submit_library', $('#submit_library').val());

            $.ajax({
                url: '../server/student/clearance/library.php',
                type: 'POST',
                data: formData, 
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.split(" ")[0].includes('success')) {
                        $("#libraryForm")[0].reset();
                        window.location.href = 'student-dashboard.php';
                    } else {
                        $('#form_message_library').html(response);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
                }
                
            });
        })
    })
</script>