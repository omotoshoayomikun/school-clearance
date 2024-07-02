<?php
include '../server/database.php';

session_start();
$staff_id = $_SESSION['staff_id'];
$staff_fname = $_SESSION['staff_f_name'];
$staff_lname = $_SESSION['staff_l_name'];

$title = "Staff Dashboard";

$links = array(
    2 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/dataTables.bootstrap4.min.css", "type" => "text/css"),
    5 => array("rel" => "stylesheet", "sizes" => "", "href" => "src/plugins/datatables/css/responsive.bootstrap4.min.css", "type" => "text/css"),
);

if (!$_SESSION['staff_id']) {
    header("Location: ./login.php");
}

$sql = "SELECT * FROM staff_info WHERE staff_id = '$staff_id'";
$result = $conn->query($sql);

include "./layout/header.php";
include "./layout/navbar.php";
include "./layout/sidebar.php";

?>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Requests</h2>
        </div>


        <div class="card-box pb-10">
            <div class="h5 pd-20 mb-0">Status</div>
            <div class="pb-20 pt-20 pr-20 pl-20">
                <?php if ($result->num_rows > 0) :
                    $row = $result->fetch_assoc();
                ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">Staff ID: </div>
                            <div class="col-sm-4"><?php echo $row['staff_id'] ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">Full Name: </div>
                            <div class="col-sm-4"><?php echo $row['l_name'] . " " . $row['f_name'] . " " . $row['m_name'] ?></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">Unit: </div>
                            <div class="col-sm-2"><?php echo $row['unit'] ?></div>
                            <div class="col-sm-4">
                                <a href="" class="text-secondary" style="text-decoration: underline;">change</a>
                            </div>
                        </div>
                    </div>
                    <?php if ($row['unit'] === "hod") : ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">Department: </div>
                                <div class="col-sm-4"><?php echo $row['department'] ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">Password: </div>
                            <div class="col-sm-2">***********</div>
                            <div class="col-sm-4">
                                <a href="" class="text-secondary" style="text-decoration: underline;">change</a>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <p>You are not logged in</p>
                <?php endif; ?>

            </div>
        </div>


        <div class="footer-wrap pd-20 mb-20 mt-5 card-box">
            @2024
        </div>
    </div>
</div>
<!-- js -->
<script src="../vendors/scripts/core.js"></script>
<script src="../vendors/scripts/script.min.js"></script>
<script src="../vendors/scripts/process.js"></script>
<script src="../vendors/scripts/layout-settings.js"></script>
<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="../vendors/scripts/apexcharts-setting.js"></script>

<!-- <script src="../vendors/scripts/dashboard3.js"></script> -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>