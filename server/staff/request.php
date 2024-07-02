<?php 

require "../database.php";

if(isset($_POST['action']) == "approved") {
    $id = $_POST['id'];
    $sql = "UPDATE clearance SET status = 'approved', feedback = 'Cleared' WHERE id = $id";
    $result_approved = $conn->query($sql);
    echo "success";
}

?>