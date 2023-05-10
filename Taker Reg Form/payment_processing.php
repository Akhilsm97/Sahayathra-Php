<?php
	session_start();
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        
	}
?>


<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
$sql1="update payment set payment_status='Successfull' where Id=$id";
mysqli_query($conn,$sql1);
$sql = "SELECT giver_dash.start,giver_dash.destination,giver_dash.Giver_Name,trip_giver.imagename,payment.Id,payment.Taker_Name,giver_dash.price,giver_dash.seat FROM giver_dash,payment,trip_giver WHERE giver_dash.Giver_Name= payment.Giver_Name AND trip_giver.Giver_Name= giver_dash.Giver_Name AND payment.Taker_Name='".$username."' AND payment.req_status='Accepted' AND payment.Id='".$id."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
	<?php
    $a =$row['price'];
	$b = '3040';
	$c= $row['seat'];
    $d = $row['Id'];
	$e = $a.$b.$c.$d;
	echo $e;
	$sql2="update payment set Transaction_id='".$e."' where Id=$id";
    mysqli_query($conn,$sql2);   
}
}
?> 
      <!DOCTYPE html>
<html lang="en">
<head>
	<title>Receipt</title>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="7; url='payment completion.php?Id=<?php echo $id;?>'" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/receipt.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
<!--===============================================================================================-->

</head>
<body>

 <p style="text-align:center; margin-top:200px; font-size:30px;">Payment Processing........
<div class="spinner-border" role="status" style="font-size:30px;margin-left:750px; ">

  <span class="visually-hidden">Loading...</span>
</div>

 </p>

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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</body>
</html>


                




















