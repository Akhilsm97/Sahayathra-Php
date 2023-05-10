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
 if(isset($_POST["Giver_id"]))  
 {  
   $Name = $_POST['Giver_id'];
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "sahayathra");  
      $query = "SELECT * FROM trip_giver, giver_dash where trip_giver.Giver_Name='$Name' and giver_dash.Giver_Name = '$Name'";  
      $result = mysqli_query($conn, $query);
    
      while($row = mysqli_fetch_array($result))  
      {  
           ?>
  
  <div class="row">
     <div class="col-md-4">
     <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" class="rounded-circle" width="200px" height="200px" style="margin-left:25px;" alt="">
      </div>
      <div class="col-md-4">
     
      </div> 
      <div class="col-md-4">
  
      <button type="button"  Name="<?php echo $row['Giver_Name']; ?>" class="btn btn-info btn-xs views_data" style="margin-right:100px;">Request Here</button>
      </div>

   <div class="row">
     <div class="col">
     <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Name &nbsp;: &nbsp;<?php echo $row['Giver_Name']?></p>
      </div>
      <div class="col">
         <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Aaddhar&nbsp;:&nbsp; <?php echo $row['aaddhar']?></p>
      </div>
      <div class="col">
        <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Address&nbsp;:&nbsp; <?php echo $row['address']?></p>
      </div>
    
    </div>
    <div class="row">
      <div class="col">
       <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Mob No&nbsp;:&nbsp; <?php echo $row['mobno']?></p>
      </div>
       <div class="col">
        <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Native&nbsp;:&nbsp; <?php echo $row['native']?></p>
      </div>
       <div class="col">
        <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Nationality&nbsp;:&nbsp; <?php echo $row['nationality']?></p>
      </div>

    </div>

    <div class="row">
      <div class="col">
       <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Car Type&nbsp;:&nbsp; <?php echo $row['car_type']?></p>

    </div>
  
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <div class="row">
      <div class="col">
       <p class="card-text1"  style="margin-top:20px;margin-left:10px; color:black; text-align:center;">TRIP DETAILS</p>
       </div>
   </div>

      
   <div class="row">
     <div class="col">
     <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Start &nbsp;: &nbsp;<?php echo $row['start']?></p>
      </div>
      <div class="col">
         <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Destination&nbsp;:&nbsp; <?php echo $row['destination']?></p>
      </div>
      <div class="col">
        <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Time&nbsp;:&nbsp; <?php echo $row['time']?></p>
      </div>
    
    </div>


    <div class="row">
     <div class="col">
     <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Date &nbsp;: &nbsp;<?php echo $row['date']?></p>
      </div>
      <div class="col">
         <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Vehicle Model&nbsp;:&nbsp; <?php echo $row['veh_model']?></p>
      </div>
      <div class="col">
        <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Price&nbsp;:&nbsp; <?php echo $row['price']?></p>
      </div>
    
    </div>

    <div class="row">
     <div class="col">
     <p class="card-text1"  style="margin-top:20px;margin-left:10px;">Seat &nbsp;: &nbsp;<?php echo $row['seat']?></p>
      </div>
    </div>
                <?php
      }  
 } 
 ?>
  <!-- Modal! -->

  <div id="dataModal" class="modal fade bd-example-modal-sm"   >  
      <div class="modal-dialog modal-sm" >  
           <div class="modal-content">  
                <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                     <h4 class="modal-title"> Request</h4>  
                </div>  
                <div class="modal-body" id="trip__detail"  >  
                </div>  
                <div class="modal-footer">
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Close</button>
      </div> 
           </div>  
      </div>  
 </div>  


<script>  
 $(document).ready(function(){  
      $('.views_data').click(function(){  
           var Giver_id = $(this).attr("Name");  
           $.ajax({  
                url:"request.php",  
                method:"post",  
                data:{Giver_id:Giver_id},  
                success:function(data){  
                     $('#trip__detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>

