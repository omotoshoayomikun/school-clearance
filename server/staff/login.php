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
        
    }
}

?>