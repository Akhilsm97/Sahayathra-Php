<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
    .card-text1{margin-left:100px; font-size:25px;  color:green;font-family: "Times New Roman", Times, serif;}
    </style>
</head>
<body>
   
<?php  
 if(isset($_POST["Giver_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sahayathra");  
      $query = "SELECT * FROM trip_giver WHERE Id = '".$_POST["Giver_id"]."'";  
      $result = mysqli_query($connect, $query);
       ?>
   
     
           <?php
      while($row = mysqli_fetch_array($result))  
      {  
           ?>
  <div class="card mb-6 shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 740px; border-radius:10px 20px 10px 20px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" alt="..." class="rounded-circle" width="250px" height="250px" style="margin-top:80px;margin-left:20px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Trip Giver Details</h5>
        <p class="card-text1">Name: <?php echo $row['Giver_Name']?></p>
        <p class="card-text1">Aaddhar: <?php echo $row['aaddhar']?></p>
        <p class="card-text1">Address: <?php echo $row['address']?></p>
        <p class="card-text1">Mob No: <?php echo $row['mobno']?></p>
        <p class="card-text1">Native: <?php echo $row['native']?></p>
        <p class="card-text1">Nationality: <?php echo $row['nationality']?></p>
        <p class="card-text1">Vechicle: <?php echo $row['car_type']?></p>
      </div>
    </div>
  </div>
</div>
                <?php
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
 
</body>
</html>

