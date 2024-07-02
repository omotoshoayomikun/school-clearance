<?php ?>

<!-- MODEL START -->

<div class="modal fade" id="hod_clearance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<form id="hodForm" action="../server/student/clearance/hod.php" method="post"  enctype="multipart/form-data" class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">
					HOD
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					×
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Result cleared for from exam
						office:</label>
					<div class="col-sm-9">
						<input type="file" class="form-control" name="res_clear_fr_exam_office" id="result_clear_fr_exam_office" />
					</div>
				</div>
			</div>
			<div id="form_message_hod"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>
				<!-- <a href="" class="text-white"> -->
					<button type="submit" name="submitHod" id="submitHod" value="submitHod" class="btn btn-primary">Applied</button>
				<!-- </a> -->
			</div>
		</form>
	</div>
</div>

<!-- MODEL ENDS -->

<script>
    $(document).ready(function() {
        $("#hodForm").submit(function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            formData.append('submitHod', $('#submitHod').val());

            $.ajax({
                url: '../server/student/clearance/hod.php',
                type: 'POST',
                data: formData, 
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.split(" ")[0].includes('success')) {
                        $("#hodForm")[0].reset();
                        location.reload();
                    } else {
                        $('#form_message_hod').html(response);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
                }
                
            });
        })
    })
</script>