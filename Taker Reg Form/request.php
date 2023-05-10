<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
    .card-text1{margin-left:5px; font-size:25px;  color:green;font-family: "Times New Roman", Times, serif;}
    </style>
</head>
<body>
   
<?php  

error_reporting(0);
session_start();
if(ISSET($_SESSION['Name'])){
    $username = $_SESSION['Name'];
} 
 if(isset($_POST["Giver_id"]))  
 {  
   $Name = $_POST['Giver_id'];
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "sahayathra");  
      $query = "SELECT * FROM trip_giver, giver_dash where trip_giver.Giver_Name='$Name' and giver_dash.Giver_Name = '$Name'";  
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($result))  
      {  
              $query = "INSERT INTO `payment`(`Taker_Name`, `Giver_Name`, `req_status`, `payment_status`,`Transaction_id`) VALUES ('$username','$row[Giver_Name]','pending','pending','')";  
             $result = mysqli_query($conn, $query);
               if($result)
               {
                   echo 'Your Request is sucessfully Sent. Waiting for response from giver!';
               }
                
      }  
 } 
 ?>
 

</body>
</html>

