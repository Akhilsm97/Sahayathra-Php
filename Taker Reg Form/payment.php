<?php
	session_start();
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Trip Details</title>
    <style>
    .card-text{margin-left:10px; font-size:15px;  color:green;font-family: "Times New Roman", Times, serif;}
    .btn-change{
    height: 50px;
    width: 200px;
    background: lightseagreen;
    margin: 20px;
    float: left;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition: all 0.5s ease-in-out;
    border: 0px;
    color: #fff;
}
.btn-change:hover{
    -webkit-transform: scale(1.1);
    background: #31708f;
}
    </style>
  </head>
  <body>
    <a class="btn btn-primary" href="/sahayathra/taker Reg Form/Takerhome.php" style="margin-left:1200px;margin-top:10px;">Back</a>
   <div class="container py-5">
      <div class="row mt-4">
      <?php
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT giver_dash.start,giver_dash.destination,giver_dash.Giver_Name,trip_giver.imagename,payment.Id FROM giver_dash,payment,trip_giver WHERE giver_dash.Giver_Name= payment.Giver_Name AND trip_giver.Giver_Name= giver_dash.Giver_Name AND payment.Taker_Name='".$username."' AND payment.req_status='Accepted' AND payment.payment_status='pending'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
 <?php echo $row['Id'];?>
  <div class="col-md-3 mt-3 ">
         <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width:19rem; ">
            <div class="card-body">
            <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" class="rounded-circle" width="200px" height="200px" style="margin-left:25px;" alt="">
            <div class="card-text" style="font-size:20px;"><br>
           
              <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; <?php echo $row['Giver_Name']?></p>
              <p>Start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['start']?></p>
              <p>Destination&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['destination']?></p>
              <button type="button"   class="btn btn-primary btn-change" style="margin-left:5px;"><a href="redirecting.php?Id=<?php echo $row['Id']?>" style="color:white; text-decoration:none;">Click Here For Payment&nbsp;<i class="fas fa-angle-double-right"></i></a></button>
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