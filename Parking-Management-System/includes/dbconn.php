<?php
    $con=mysqli_connect("localhost", "root", "", "vehicle-parking-db", 3306);
    if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
    }
  ?>