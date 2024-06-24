<?php 

$heading = isset($heading) ? $heading : '';
$body = isset($body) ? $body : '';
$link = isset($link) ? $link : '';

?>

<!-- MODEL START -->

<div class="modal" id="successModal">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><?php echo $heading ?></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <?php echo $body ?>
        </div>
        <div class="modal-footer">
            <a href="<?php echo $link ?>">
                <button type="button" class="btn btn-success">Login</button>
            </a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
    </div>
</div>