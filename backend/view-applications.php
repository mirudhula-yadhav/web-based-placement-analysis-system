<?php

include 'db.php';

$sql = "SELECT * FROM applications";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

    echo "Application ID: "
         . $row['application_id']
         . "<br>";

}
?>
