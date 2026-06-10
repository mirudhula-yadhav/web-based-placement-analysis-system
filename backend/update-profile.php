<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $department = $_POST['department'];

    $sql = "UPDATE students
            SET student_name='$student_name',
                department='$department'
            WHERE student_id='$student_id'";

    if(mysqli_query($conn,$sql)){
        echo "Profile Updated Successfully";
    } else {
        echo "Update Failed";
    }
}

?>
