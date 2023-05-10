<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <title>Trip Details</title>
    <style>
    .card-text{margin-left:10px; font-size:15px;  color:green;font-family: "Times New Roman", Times, serif;}
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

$sql = "SELECT * FROM trip_giver,giver_dash where trip_giver. Giver_Name= giver_dash. Giver_Name";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
  <div class="col-md-3 mt-3 ">
         <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width:19rem; ">
            <div class="card-body">
            <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" class="rounded-circle" width="200px" height="200px" style="margin-left:25px;" alt="">
            <div class="card-text" style="font-size:20px;"><br>
              <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; <?php echo $row['Giver_Name']?></p>
              <p>Start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['start']?></p>
              <p>Destination&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['destination']?></p>
              <button type="button"  Name="<?php echo $row['Giver_Name']; ?>" class="btn btn-info btn-xs view_data" style="background:none;margin-left:200px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></button>
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

      <!-- Modal! -->

      <div id="dataModal" class="modal fade bd-example-modal-lg"   >  
      <div class="modal-dialog modal-xl" >  
           <div class="modal-content" style="background-image: url('images/two.jpg');" style="width:1000px;">  
                <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                     <h4 class="modal-title">Trip Givers Details</h4>  
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
      $('.view_data').click(function(){  
           var Giver_id = $(this).attr("Name");  
           $.ajax({  
                url:"Trip_full_details.php",  
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