    
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
	<title>Receipt</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT giver_dash.start,giver_dash.destination,giver_dash.Giver_Name,trip_giver.imagename,payment.Id,payment.payment_status,payment.Taker_Name,giver_dash.price,giver_dash.time,giver_dash.date,payment.Transaction_id,trip_taker.address As Address,trip_taker.native As Native,trip_taker.mobno As Mobno,trip_taker.nationality As Nationality,trip_giver.address,trip_giver.native,trip_giver.mobno,trip_giver.nationality  FROM giver_dash,payment,trip_giver,trip_taker WHERE giver_dash.Giver_Name= payment.Giver_Name AND trip_giver.Giver_Name= giver_dash.Giver_Name AND payment.Taker_Name='".$username."' AND trip_taker.Taker_Name='".$username."' AND payment.req_status='Accepted' AND payment.Id='".$id."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
<div class="receipt-content"  id="myfrm">
    <div class="container bootstrap snippets bootdey">
		<div class="row">
			<div class="col-md-12">
				<div class="invoice-wrapper">
					<div class="intro">
						Hi <strong><?php echo $row['Taker_Name'];?></strong>, 
						<br>
						This is the receipt for a payment of <strong>₹<?php echo $row['price'];?></strong> (INR) for your travel
					</div>

					<div class="payment-info">
						<div class="row">
							<div class="col-sm-6">
								<span>Transaction No.</span>
								<strong><?php echo $row['Transaction_id'];?></strong>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment Date</span>
								<strong><?php echo date("Y/m/d");?> - <?php echo date("h:i:sa"); ?></strong>
							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Taker</span>
								<strong>
									<?php echo $row['Taker_Name'];?>
								</strong>
								<p>
									<?php echo $row['Address'];?> <br>
									<?php echo $row['Native'];?> <br>
									Mob:<?php echo $row['Mobno'];?> <br>
									<?php echo $row['Nationality'];?> <br>
									
								</p>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment To</span>
								<strong>
									<?php echo $row['Giver_Name'];?>
								</strong>
								<p>
									<?php echo $row['address'];?> <br>
									<?php echo $row['native'];?> <br>
									Mob:<?php echo $row['mobno'];?> <br>
									<?php echo $row['nationality'];?><br>
									
								</p>
							</div>
						</div>
					</div>

					<div class="line-items">
						<div class="headers clearfix">
							<div class="row">
								<div class="col-xs-4">Trip Details</div>
							</div>
						</div>
						<div class="items">
							<div class="row item">
								<div class="col-xs-4 desc">
									<b style="font-size:20px;">Start</b>
								</div>
								<div class="col-xs-3 qty">
									<strong><?php echo $row['start'];?></strong>
								</div>
							</div>
							<div class="row item">
								<div class="col-xs-4 desc">
								<b style="font-size:20px;">Destination</b>
								</div>
								<div class="col-xs-3 qty">
								<strong><?php echo $row['destination'];?></strong>
								</div>
							</div>
							<div class="row item">
								<div class="col-xs-4 desc">
								<b style="font-size:20px;">Time & Date</b>
								</div>
								<div class="col-xs-3 qty">
								<strong><?php echo $row['time'];?></strong>&nbsp; & &nbsp;&nbsp;<strong><?php echo $row['date'];?></strong>
								</div>
							
							</div>
						</div>
						<div class="total text-right">
							<p class="extra-notes">
								<strong  style="font-size:20px;">Payment Status</strong>
								<b  style="font-size:20px;"><?php echo $row['payment_status'];?></b>
							</p>
							<div class="field">
								Subtotal <span>₹<?php echo $row['price'];?></span>
							</div>
							<div class="field">
								Shipping <span>₹0.00</span>
							</div>
							<div class="field">
								Discount <span>0%</span>
							</div>
							<div class="field grand-total">
								Total <span>₹<?php echo $row['price'];?></span>
							</div>
						</div>

	
                                       <div class="print">
							<a href="#" onclick="myPrint('myfrm')">
								<i class="fa fa-print"></i>
								Print this receipt
							</a>
							<a href="/sahayathra/taker Reg Form/Takerhome.php">
								<i class="fa fa-print"></i>
								Home
							</a>
						</div>
					</div>
				</div>

				<div class="footer">
					Copyright © 2014. company name
				</div>
			</div>
		</div>
	</div>
</div>
 <script>
        function myPrint(myfrm) {
            var printdata = document.getElementById(myfrm);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>                    
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


                