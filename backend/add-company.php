<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $company_name = $_POST['company_name'];
    $job_role = $_POST['job_role'];
    $package = $_POST['package'];
    $eligibility = $_POST['eligibility'];

    $sql = "INSERT INTO companies
    (company_name, job_role, package, eligibility_criteria)
    VALUES
    ('$company_name','$job_role','$package','$eligibility')";

    if(mysqli_query($conn,$sql)){
        echo "Company Added Successfully";
    } else {
        echo "Error Adding Company";
    }
}

?>
