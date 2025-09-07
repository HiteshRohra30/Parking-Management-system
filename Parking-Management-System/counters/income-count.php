<?php

    include './includes/dbconn.php';
    
    $sql = "SELECT SUM( ParkingCharge) FROM vehicle_info";
        $amountsum = mysqli_query($con, $sql) or die(mysqli_error($sqli));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo $row_amountsum['SUM( ParkingCharge)'];
 ?>