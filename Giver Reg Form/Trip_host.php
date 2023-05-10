<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  </head>

  <body>
  <?php


$conn = mysqli_connect('localhost','root','','sahayathra');


if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}else{
    echo 'Connection Successfull <br>';
}
if(isset($_POST['submit']))
{	 
    $Name = $_POST['Name'];
    $start= $_POST['start'];
    $destination = $_POST['destination'];
    $time  = $_POST['time'];
    $date  = $_POST['date'];
    $veh_model  = $_POST['veh_model'];
    $price= $_POST['price'];
    $seat = $_POST['seat'];
    echo $Name;
    echo  $start;
    echo $destination;
    echo $time;
    echo $date;
    echo $veh_model;
    echo $price;
    echo $seat ;
	 $sql =  "INSERT INTO `giver_dash`(`Giver_Name`, `start`, `destination`, `time`, `date`, `veh_model`, `price`, `seat`) VALUES ('$Name','$start','$destination','$time','$date','$veh_model','$price','$seat')";
   $result = mysqli_query($conn,$sql);
   if($result)
   {
    echo "<script>alert('Data Inserted Successfully!')</script>";
    echo "<script>window.location='/sahayathra/giver Reg Form/Giverhome.php'</script>";
     
   }else{
    echo "<script>alert('Not Inserted Successfully!')</script>";
   }
}

?>

<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  </body>
</html>