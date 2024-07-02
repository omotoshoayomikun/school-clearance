<?php 

require '../database.php';


if(isset($_POST['staff_login'])) {
    $staff_id = $_POST["staff_id"];
    $p_word = $_POST["p_word"];

    // DECLEARING ERRORSS VARIABLES
    $staff_idErr = false;
    $p_wordErr = false;

    $staff_id == '' ?  $staff_idErr = true : $staff_idErr = false;
    $p_word == '' ?  $p_wordErr = true : $p_wordErr = false;

    if (!$staff_idErr && !$p_wordErr) { 
        $sql = "SELECT * FROM staff_info WHERE staff_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $staff_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if ($user['p_word'] == $p_word) {
                session_start();
                $_SESSION['staff_id'] = $user['staff_id'];
                $_SESSION['staff_f_name'] = $user['f_name'];
                $_SESSION['staff_l_name'] = $user['l_name'];
                $_SESSION['staff_m_name'] = $user['m_name'];
                $_SESSION['staff_unit'] = $user['unit'];
                $_SESSION['staff_department'] = $user['department'];
                echo "success";

            } else {
                echo "Invalid password!!!.";
            }
        } else {
            echo "User does not exist";
        }
    }
}

?>