<?php
	session_start();
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        
	}
?>
<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
echo $id;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
  <meta http-equiv="refresh" content="7; url='receipt.php?Id=<?php echo $id;?>'" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
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
	
<!--===============================================================================================-->
<style>
body {
  background: #999;
}

.container {
  max-width: 380px;
  margin: 30px auto;
  overflow: hidden;
}

.printer-top {
  z-index: 1;
  border: 6px solid #666666;
  height: 6px;
  border-bottom: 0;
  border-radius: 6px 6px 0 0;
  background: #333333;
}

.printer-bottom {
  z-index: 0;
  border: 6px solid #666666;
  height: 6px;
  border-top: 0;
  border-radius: 0 0 6px 6px;
  background: #333333;
}

.paper-container {
  position: relative;
  overflow: hidden;
  height: 467px;
}

.paper {
  background: #ffffff;
  height: 447px;
  position: absolute;
  z-index: 2;
  margin: 0 12px;
  margin-top: -12px;
  animation: print 1700ms cubic-bezier(0.108, -0.155, 0.65, 0.9) ;
  -moz-animation: print 1800ms cubic-bezier(0.268, -0.55, 0.65, 0.9) infinite;
}

.main-contents {
  margin: 0 12px;
  padding: 24px;
}

// Paper Jagged Edge
.jagged-edge {
  position: relative;
  height: 20px;
  width: 100%;
  margin-top: -1px;
}

.jagged-edge:after {
  content: "";
  display: block;
  position: absolute;
  //bottom: 1px;
  left: 0;
  right: 0;
  height: 22px;
  background: linear-gradient( 45deg, transparent 33.333%, #ffffff 33.333%, #ffffff 66.667%, transparent 66.667%), linear-gradient( -45deg, transparent 33.333%, #ffffff 33.333%, #ffffff 66.667%, transparent 66.667%);
  background-size: 16px 40px;
  background-position: 0 -20px;
}

.success-icon {
  text-align: center;
  font-size: 48px;
  height: 72px;
  background: #359d00;
  border-radius: 50%;
  width: 72px;
  height: 72px;
  margin: 16px auto;
  color: #fff;
}

.success-title {
  font-size: 28px;
  text-align: center;
  color: #666;
  font-weight: bold;
  margin-bottom: 16px;
}

.success-description {
  font-size: 15px;
  line-height: 21px;
  color: #999;
  text-align: center;
  margin-bottom: 24px;
}

.order-details {
  text-align: center;
  color: #333;
  font-weight: bold;
}
  .order-number-label {
    
    margin-bottom: 8px;
  }
  .order-number {
    border-top: 2px solid #ccc;
    border-bottom: 1px solid #ccc;
    line-height: 48px;
    font-size: 58px;
    padding: 18px 0;
    margin-bottom: 24px;
  }
}

.order-footer {
  text-align: center;
  line-height: 10px;
  font-size: 58px;
  margin-bottom: 3px;
  font-weight: bold;
  color: #999;
}
@keyframes print {
  0% {
    transform: translateY(-90%);
  }
  100% {
    transform: translateY(0%);
  }
}
@-webkit-keyframes print {
  0% {
    -webkit-transform: translateY(-90%);
  }
  100% {
    -webkit-transform: translateY(0%);
  }
}

@-moz-keyframes print {
  0% {
    -moz-transform: translateY(-90%);
  }
  100% {
    -moz-transform: translateY(0%);
  }
}

@-ms-keyframes print {
  0% {
    -ms-transform: translateY(-90%);
  }
  100% {
    -ms-transform: translateY(0%);
  }
}
</style>
</head>
<body>

 <?php
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT giver_dash.start,giver_dash.destination,giver_dash.Giver_Name,trip_giver.imagename,payment.Id,payment.Taker_Name,giver_dash.price,payment.Transaction_id FROM giver_dash,payment,trip_giver WHERE giver_dash.Giver_Name= payment.Giver_Name AND trip_giver.Giver_Name= giver_dash.Giver_Name AND payment.Taker_Name='".$username."' AND payment.req_status='Accepted' AND payment.Id='".$id."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
	<div class="container">
  <div class="printer-top"></div>
    
  <div class="paper-container">
    <div class="printer-bottom"></div>

    <div class="paper">
      <div class="main-contents">
        <div class="success-icon">&#10004;</div>
        <div class="success-title">
          Payment Complete
        </div>
        <div class="success-description">
          Your Transaction has been Completed.
        </div>
        <div class="order-details">
          <div class="order-number-label" style="font-size:20px;">Transaction Id</div>
          <div class="order-number"><?php echo $row['Transaction_id'];?></div>
        </div>
        <div class="order-footer">Thank you!</div>
      </div>
      <div class="jagged-edge"></div>
    </div>
  </div>
</div>
<?php
   
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</body>
</html>



