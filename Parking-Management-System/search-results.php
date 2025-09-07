<?php
    $con=mysqli_connect("localhost", "root", "", "vehicle-parking-db", 3306);
    $sql = "select ParkingNumber from vehicle_info";
    $res = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datatable.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="js/fetchndisp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<?php include 'includes/navigation.php' ?>
	
	<?php
	include 'includes/sidebar.php'
	?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard.php">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Search Vehicles</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<!-- <h1 class="page-header">Vehicle Management</h1> -->
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Search Results - Based Upon Vehicle Parking Number
			</div>
				<div class="panel-body">
					<p style="margin:5px;padding:5px;  font-size:18px; font-weight: bold;" class="col-lg-2">Select Parking No:</p>
					<select style="margin-bottom:50px; padding:10px;  font-size: 16px;" id="searchData" onchange="selectRegno()">
						<?php while($rows = mysqli_fetch_array($res)){
							?>
							<option value="<?php echo $rows['ParkingNumber']; ?>"> <?php echo $rows['ParkingNumber']; ?></option>
						<?php    
						}
					?>
					</select>
					<table id="example" class="table table-striped table-hover table-bordered">
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
							
							</tr>
						</thead>
						<tbody id="ans">

						</tbody>
					</div><!--/.row-->
				</div>
	</div>	
					</div>

	
</body>
</html>