<?php
    $con=mysqli_connect("localhost", "root", "", "vehicle-parking-db", 3307);
    $sql = "select RegistrationNumber from vehicle_info";
    $res = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/fetchndisp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    Select Reg no :
    <select id="searchData" onchange="selectRegno()">
        <?php while($rows = mysqli_fetch_array($res)){
            ?>
            <option value="<?php echo $rows['RegistrationNumber']; ?>"> <?php echo $rows['RegistrationNumber']; ?></option>
        <?php    
        }
        ?>
    </select>
    <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                        
                            <thead>
                                <tr>
                                <th>ParkingNumber</th>
                                <th>VehicleCategory</th>
                                <th>VehicleCompanyname</th>
                                <th>RegistrationNumber</th>
                                <th>OwnerName</th>
                                <th>OwnerContactNumber</th>
                                <th>InTime</th>
                                <th>OutTime</th>
                                <th>ParkingCharge</th>
                                <th>Remark</th>
                                <th>Status</th>
                                <th></th>

                                </tr>
                            </thead>
                            <tbody id="ans">

                            </tbody>
</body>
</html>