<?php 
require "../database.php";

if(isset($_POST['submit_reg'])) {
    $file_fields = ['staff_id', 'f_name', 'm_name', 'l_name', 'unit', 'department', 'gender', 'p_word', 'p_word_con'];
    $fileError = [false, false, false, false, false, false, false, false, false];
    $fileMsg = ['', '', '', '', '', '', '', '', ''];

    for($i = 0; $i < count($file_fields); $i++) {
        if( $_POST[$file_fields[$i]] == "") {
            $fileError[$i] = true;
            $fileMsg[$i] = "Field can not be empty";
        } else {
            $fileError[$i] = false;
            $fileMsg[$i] = "";
        }
    }

    if($_POST[$file_fields[4]] !== "hod") {
        $fileError[5] = false;
    } 
    
    if (in_array(true, $fileError)) {
        exit();
    } else {
        $sql = "INSERT INTO staff_info (staff_id, f_name, m_name, l_name, unit, department, gender, p_word) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Error: an error occurred while creating the database connection";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssss", $_POST[$file_fields[0]], $_POST[$file_fields[1]], $_POST[$file_fields[2]], $_POST[$file_fields[3]], $_POST[$file_fields[4]], $_POST[$file_fields[5]], $_POST[$file_fields[6]], $_POST[$file_fields[7]]);
            mysqli_stmt_execute($stmt);
            echo "success";

        }
    }


}

?>