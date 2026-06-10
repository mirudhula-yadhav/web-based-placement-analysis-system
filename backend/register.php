<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentName = $_POST['studentName'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $cgpa = $_POST['cgpa'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students
    (student_name,email,department,cgpa,password)
    VALUES
    ('$studentName','$email','$department','$cgpa','$password')";

    if(mysqli_query($conn,$sql)){
        echo "Registration Successful";
    } else {
        echo "Error";
    }
}

?>
