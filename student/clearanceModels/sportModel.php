<?php ?>


<!-- MODEL START -->

<div class="modal fade" id="sport_clearance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form id="sportForm" action="../server/student/clearance/sport.php" class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Sport Clearance Form
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Clearance Form</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="clearance_form" id="clearance_form" />
                    </div>
                </div>
            </div>
            <div id="form_message_sport"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <a href="" class="text-white">
                    <button type="submit" name="sport_library" id="sport_library" value="sport_library" class="btn btn-primary">Applied</button>
                </a>
            </div>
        </form>
    </div>
</div>

<!-- MODEL ENDS -->
 
<script>
    $(document).ready(function() {
        $("#sportForm").submit(function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            formData.append('sport_library', $('#sport_library').val());

            $.ajax({
                url: '../server/student/clearance/sport.php',
                type: 'POST',
                data: formData, 
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.split(" ")[0].includes('success')) {
                        $("#sportForm")[0].reset();
                        window.location.href = 'student-dashboard.php';
                    } else {
                        $('#form_message_sport').html(response);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
                }
                
            });
        })
    })
</script>