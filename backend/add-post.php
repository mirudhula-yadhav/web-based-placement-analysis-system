<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $company_id = $_POST['company_id'];
    $post_title = $_POST['post_title'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO placement_posts
    (company_id, post_title, description, application_deadline)
    VALUES
    ('$company_id','$post_title','$description','$deadline')";

    if(mysqli_query($conn,$sql)){
        echo "Placement Post Added Successfully";
    } else {
        echo "Error Adding Placement Post";
    }
}

?>
