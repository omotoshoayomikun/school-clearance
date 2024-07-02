<?php

include '../../database.php';
session_start();

$student_matric = $_SESSION['matric_no'];
$student_department = $_SESSION['department'];

function handleFileProcessing($file_fields, &$fileError, &$fileMsg, &$student_matric, &$uploaded_file)
{
    function FileExtention($fileName)
    {
        $tempExtention = explode('.', $fileName);
        $fileExt = strtolower(end($tempExtention));
        return $fileExt;
    }

    for ($i = 0; $i < count($file_fields); $i++) {
        if ($_FILES[$file_fields[$i]]["name"] === "") {
            $fileError[$i] = true;
            $fileMsg[$i] = "Select a file";
        } else {
            $fileError[$i] = false;
            $fileMsg[$i] = "";

            if ($_FILES[$file_fields[$i]]['error'] == 0) {
                $fileMsg[$i] = '';
                $fileError[$i] = false;
                if ($_FILES[$file_fields[$i]]['size'] < 1000000) {
                    $fileMsg[$i] = "";
                    $fileError[$i] = false;
                    $newFileName = uniqid('', true) . "." . FileExtention($_FILES[$file_fields[$i]]['name']);
                    $FileDestination = "../../../uploads/" . $newFileName;
                    move_uploaded_file($_FILES[$file_fields[$i]]['tmp_name'], $FileDestination);
                    $uploaded_file[$i] = $newFileName;
                    // echo "File Saved Successfully";
                } else {
                    $fileMsg[$i] = "Selected file is too large";
                    $fileError[$i] = true;
                }
            } else {
                $fileMsg[$i] = "An error has occurred!!! choose the file again.";
                $fileError[$i] = true;
            }
        }
    }
}


if (isset($_POST['academic'])) {

    $file_fields = ['convocation', 'testimonial', 'certificate', 'sta_of_result', 'cert_hold', 'alumni', 'o_level', 'result_form'];
    $fileError = [false, false, false, false, false, false, false, false];
    $fileMsg = ['', '', '', '', '', '', '', ''];
    $uploaded_file = ['', '', '', '', '', '', '', ''];
    $status = "pending";
    $clearance_type = "academic";

    handleFileProcessing($file_fields, $fileError, $fileMsg, $student_matric, $uploaded_file);


    if (in_array(true, $fileError)) {
        exit();
    } else {

        $sql = "SELECT * FROM clearance WHERE student_matric = '$student_matric' AND clearance_type = '$clearance_type' AND status = 'rejected'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $sql = "UPDATE clearance SET convocation = '$uploaded_file[0]', testimonial = '$uploaded_file[1]', certificate = '$uploaded_file[2]', sta_of_result= '$uploaded_file[3]', cert_hold= '$uploaded_file[4]', alumni = '$uploaded_file[5]', o_level = '$uploaded_file[6]', result_form = '$uploaded_file[7]', status = '$status', feedback = ''  WHERE student_matric = '$student_matric'";
            if ($conn->query($sql) === TRUE) {
                echo "success";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $sql = "INSERT INTO clearance (student_matric, convocation, testimonial, certificate, sta_of_result, cert_hold, alumni, o_level, result_form, status, clearance_type, department) VALUES ('$student_matric', '$uploaded_file[0]', '$uploaded_file[1]', '$uploaded_file[2]', '$uploaded_file[3]', '$uploaded_file[4]', '$uploaded_file[5]', '$uploaded_file[6]', '$uploaded_file[7]', '$status', '$clearance_type', '$student_department')";

            if ($conn->query($sql) === TRUE) {
                echo "success";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
