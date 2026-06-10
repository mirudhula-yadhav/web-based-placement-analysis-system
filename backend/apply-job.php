<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST['student_id'];
    $post_id = $_POST['post_id'];

    $sql = "INSERT INTO applications
    (student_id, post_id, application_status)
    VALUES
    ('$student_id','$post_id','Applied')";

    if(mysqli_query($conn,$sql)){
        echo "Application Submitted Successfully";
    } else {
        echo "Application Failed";
    }
}

?>
