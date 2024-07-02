
<?php

require "../database.php";

if (isset($_POST['action']) == "rejected") {
    $id = $_POST['id'];
    $feedback = $_POST['feedback'];
    $sql = "UPDATE clearance SET status = 'rejected', feedback = '$feedback'  WHERE id = $id";
    $result_reject = $conn->query($sql);
    echo "success";
    // echo $feedback;
}
?>
