<?php 
require '../database.php';


if(isset($_POST['submit'])) {

    $matric_no = strtolower($_POST["matric_no"]);
    $f_name = strtolower($_POST["f_name"]);
    $m_name = strtolower($_POST["m_name"]);
    $l_name =strtolower($_POST["l_name"]);
    $department = strtolower($_POST["department"]);
    $level = strtolower($_POST["level"]);
    $year = strtolower($_POST["year"]);
    $gender = strtolower($_POST["gender"]);
    $p_word = strtolower($_POST["p_word"]);
    $confirm_password = strtolower($_POST["confirm_password"]);


    // DECLEARING ERRORSS VARIABLES
    $matric_noErr = false;
    $f_nameErr = false;
    $m_nameErr = false;
    $l_nameErr = false;
    $departmentErr = false;
    $levelErr = false;
    $yearErr = false;
    $genderErr = false;
    $p_wordErr = false;
    $confirm_passwordErr = false;

    $matric_no == ''?  $matric_noErr = true : $matric_noErr = false;
    $f_name == ''?  $f_nameErr = true : $f_nameErr = false;
    $m_name == ''?  $m_nameErr = true : $m_nameErr = false;
    $l_name == ''?  $l_nameErr = true : $l_nameErr = false;
    $department == ''?   $departmentErr = true : $departmentErr = false;
    $level == ''?  $levelErr = true : $levelErr = false;
    $year == ''?  $yearErr = true : $yearErr = false;
    $gender == ''?  $genderErr = true : $genderErr = false;
    $p_word == ''?  $p_wordErr = true : $p_wordErr = false;
    $confirm_password == ''?  $confirm_passwordErr = true : $confirm_passwordErr = false;

    if(!$matric_noErr && !$f_nameErr && !$m_nameErr && !$l_nameErr && !$departmentErr && !$levelErr && !$yearErr && !$yearErr && !$genderErr && !$p_wordErr && !$confirm_passwordErr) {
        $sql = "SELECT matric_no FROM students_info WHERE matric_no = ?";
        if($p_word !== $confirm_password) {
            echo "Password and confirm password does not match.";
            $p_wordErr = true;
            $confirm_passwordErr = true;
        } else {
            $p_wordErr = false;
            $confirm_passwordErr = false;
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "An error occurred";
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $matric_no);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $rowCount = mysqli_stmt_num_rows($stmt);
        
                if($rowCount > 0) {
                    echo "Matric No exist!!!";
                exit();
                } else {
                    $sql = "INSERT INTO students_info (matric_no, f_name, m_name, l_name, department, level, year, gender, p_word) VALUES (?,?,?,?,?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "sssssssss", $matric_no, $f_name, $m_name, $l_name, $department, $level, $year, $gender, $p_word);
                        mysqli_stmt_execute($stmt);
                        echo "success";
                        }
                    }
            }
        }
    } else {
        echo "Please fill all fields";
    }

    // my_sqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>

<script>
     var matric_noErr = "<?php echo $matric_noErr; ?>";
    var f_nameErr = "<?php echo $f_nameErr; ?>";
    var m_nameErr = "<?php echo $m_nameErr; ?>";
    var l_nameErr = "<?php echo $l_nameErr; ?>";
    var departmentErr = "<?php echo $departmentErr; ?>";
    var levelErr = "<?php echo $levelErr; ?>";
    var yearErr = "<?php echo $yearErr; ?>";
    var genderErr = "<?php echo $genderErr; ?>";
    var p_wordErr = "<?php echo $p_wordErr; ?>";
    var confirm_passwordErr = "<?php echo $confirm_passwordErr; ?>";
        
    matric_noErr ? $("#matric_no").addClass("input-error") : $("#matric_no").removeClass("input-error")
    f_nameErr ? $("#f_name").addClass("input-error") : $("#f_name").removeClass("input-error")
    m_nameErr ? $("#m_name").addClass("input-error") : $("#m_name").removeClass("input-error")
    l_nameErr ? $("#l_name").addClass("input-error") : $("#l_name").removeClass("input-error")
    departmentErr ? $("#department").addClass("input-error") : $("#department").removeClass("input-error")
    levelErr ? $("#level").addClass("input-error") : $("#level").removeClass("input-error")
    yearErr ? $("#year").addClass("input-error") : $("#year").removeClass("input-error")
    genderErr ? $("#gender").addClass("input-error") : $("#gender").removeClass("input-error")
    p_wordErr ? $("#p_word").addClass("input-error") : $("#p_word").removeClass("input-error")
    confirm_passwordErr ? $("#confirm_password").addClass("input-error") : $("#confirm_password").removeClass("input-error")

    

</script>