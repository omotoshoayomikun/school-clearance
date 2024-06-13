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
                        <input type="file" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Testimonial Receipt</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Certificate Receipt
                        (HND/ND)</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Statement of Result</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Certificate Hold</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" />
                    </div>
                </div>
            </div>
            <div id="form_message_library"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <a href="student-dashboard.html" class="text-white">
                    <button type="button" class="btn btn-primary">Applied</button>
                </a>
            </div>
        </form>
    </div>
</div>

<!-- MODEL ENDS -->