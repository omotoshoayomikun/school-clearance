<?php

require '../database.php';


if (isset($_POST['submit'])) {

    $matric_no = $_POST["matric_no"];
    $p_word = $_POST["p_word"];

    // DECLEARING ERRORSS VARIABLES
    $matric_noErr = false;
    $p_wordErr = false;

    $matric_no == '' ?  $matric_noErr = true : $matric_noErr = false;
    $p_word == '' ?  $p_wordErr = true : $p_wordErr = false;

    if (!$matric_noErr && !$p_wordErr) {
        $stmt = $conn->prepare("SELECT * FROM students_info WHERE matric_no = ?");
        $stmt->bind_param("s", $matric_no);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if ($user['p_word'] == $p_word) {

                session_start();
                // Password is correct, start a session
                $_SESSION['matric_no'] = $user['matric_no'];
                $_SESSION['f_name'] = $user['f_name'];
                $_SESSION['l_name'] = $user['l_name'];
                $_SESSION['m_name'] = $user['m_name'];
                $_SESSION['department'] = $user['department'];
                echo "success";
                exit();
            } else {
                echo "Invalid password!!!.";
            }
        } else {
            echo "Matric number not found.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "An error occurred";
}

?>

<script>
    var matric_noErr = "<?php echo $matric_noErr; ?>";
    var p_wordErr = "<?php echo $p_wordErr; ?>";
    matric_noErr ? $("#matric_no").addClass("input-error") : $("#matric_no").removeClass("input-error");
    p_wordErr ? $("#p_word").addClass("input-error") : $("#p_word").removeClass("input-error")
</script>