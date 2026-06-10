<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST['student_id'];

    $sql = "DELETE FROM students
            WHERE student_id='$student_id'";

    if(mysqli_query($conn,$sql)){
        echo "Student Deleted Successfully";
    } else {
        echo "Delete Failed";
    }
}

?>
