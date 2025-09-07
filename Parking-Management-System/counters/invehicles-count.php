<?php

    include './includes/dbconn.php';
    $count =10;
    $query=mysqli_query($con,"SELECT ID from  vehicle_info where Status=''");
    $count_parkings=mysqli_num_rows($query);

    if($count_parkings > $count) {
        echo $count;
    } else {
        echo $count_parkings;
    }
 ?>