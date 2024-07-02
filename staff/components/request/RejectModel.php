<?php

$stu_id = isset($stu_dent_id) ? $stu_dent_id : "";

?>

<div class="modal fade" id="<?php echo "_".$stu_id."reject_model" ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div action="" method="post" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    FEEDBACK <?php echo $stu_id ?>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row px-5 py-2">
                    <textarea name="feedback" id="feedback_<?php echo $stu_id; ?>" placeholder="Please give reasons why you rejected this clearance" class="form-control"></textarea>
                </div>
            </div>
            <div id="form_message_hod"></div>
            <div class="modal-footer">
                <a href="" class="text-white">
                    <button class="btn btn-primary handleReject" data-stu-id="<?php echo $stu_id ?>" data-param2="<?php echo $row['id'] ?>">Continue</button>
                </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on("click", ".handleReject", function(e) {
            e.preventDefault();
            const param2 = $(this).data("param2");
            const stu_id = $(this).data("stu-id");
            const feedback = $("#feedback_" + stu_id).val();
            const formData = new FormData();
            formData.append("feedback", feedback);
            formData.append("id", param2);
            formData.append("action", "rejected");

            $.ajax({
                url: "../server/staff/reject.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.split(" ")[0].includes('success')) {
                        location.reload();
                    } else {
                        $('#form_message_hod').html(response);
                        console.log(response)
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
                }
            })
        })
    })
</script>