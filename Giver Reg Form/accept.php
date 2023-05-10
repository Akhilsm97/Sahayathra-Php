<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <title>Giver Details</title>
    <style>
    .card-text{margin-left:10px; font-size:15px;  color:green;font-family: "Times New Roman", Times, serif;}
    </style>
  </head>
  <body>
    <a class="btn btn-primary" href="/sahayathra/giver Reg Form/Giverhome.php" style="margin-left:1200px;margin-top:10px;">Back</a>
    <p style="text-align:center;">
    <?php 
    error_reporting(0);
    $mess = $_GET['message'];
    echo $mess;
    ?>
    </p>
   <div class="container py-5">
      <div class="row mt-4">
      <?php
	session_start();
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        
	}
?> 
</p>
      <?php
      
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM trip_taker, payment WHERE trip_taker.Taker_Name= payment.Taker_Name AND payment.Giver_Name='$username' AND payment.req_status='pending'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
  <div class="col-md-3 mt-3 ">
         <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width:18rem; ">
            <div class="card-body">
            <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" class="rounded-circle" width="200px" height="200px" style="margin-left:25px;" alt="">
            <div class="card-text">
              <p>Name: <?php echo $row['Taker_Name']?></p>
              <p>Address:<?php echo $row['address']?></p>
              <p>Aaddhar:<?php echo $row['aaddhar']?></p>
              <p>Mob No:<?php echo $row['mobno']?></p>
              <p>Native:<?php echo $row['native']?></p>
              <p>Nationality:<?php echo $row['nationality']?></p>
              <button type="button" class="btn btn-info btn-xs"><a href="approve_req.php?Id=<?php echo $row['Id']?>" style="text-decoration:none; color:black;">Accept</a></button>
              <button type="button" class="btn btn-info btn-xs"><a href="reject_req.php?Id=<?php echo $row['Id']?>" style="text-decoration:none; color:black;">Reject</a></button>
             
            </div>
            </div>
          </div>
        </div>
    <?php
   
  }
}
?> 

      
      </div>
   </div>

   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  
  </body>
</html>