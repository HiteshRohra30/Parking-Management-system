<?php
    $k = $_POST['id'];
    $k= trim($k);
    $con=mysqli_connect("localhost", "root", "", "vehicle-parking-db", 3306);
    $sql = "select * from vehicle_info where ParkingNumber='{$k}'";
    $res = mysqli_query($con, $sql);
    while($rows = mysqli_fetch_array($res)){
?>
    <tr>
        <td> <?php echo $rows['ParkingNumber']; ?></td>
        <td> <?php echo $rows['VehicleCategory']; ?></td>
        <td> <?php echo $rows['VehicleCompanyname']; ?></td>
        <td> <?php echo $rows['RegistrationNumber']; ?></td>
        <td> <?php echo $rows['OwnerName']; ?></td>
        <td> <?php echo $rows['OwnerContactNumber']; ?></td>
        <td> <?php echo $rows['InTime']; ?></td>
        <td> <?php echo $rows['OutTime']; ?></td>
        <td> <?php echo $rows['ParkingCharge']; ?></td>
     
    </tr>
<?php 

    }
?>