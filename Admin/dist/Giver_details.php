<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trip Hosted</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
    .card-text{margin-left:10px; font-size:15px;  color:green;font-family: "Times New Roman", Times, serif;}
    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">SAHAYATHRA</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                         </div>   
                         
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Trip Hosted Details</h1>
                        
                        <div class="card mb-3">
                            <div class="card-body">
                            <div class="container py-3">
      <div class="row mt-4">
      <?php
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `trip_giver`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
  <div class="col-md-4 mt-4 ">
         <div class="card  shadow-lg p-3 mb-3 bg-white rounded" style="width:18rem; ">
            <div class="card-body">
            <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" class="rounded-circle" width="200px" height="200px" style="margin-left:5px;" alt="">
            <div class="card-text">
              <p>Name: <?php echo $row['Giver_Name']?></p>
              <p>Address:<?php echo $row['address']?></p>
              <p>Mob No:<?php echo $row['mobno']?></p>
              <input type="button" name="view" value="More Details" Id="<?php echo $row['Id']; ?>" class="btn btn-info btn-xs view_data" />
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

      <div id="dataModal" class="modal fade bd-example-modal-lg">  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content" style="background-image: url('images/two.jpg');">  
                <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                     <h4 class="modal-title">Trip Givers Details</h4>  
                </div>  
                <div class="modal-body" id="Giver__detail">  
                </div>  
                <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>  
           </div>  
      </div>  
 </div>  


<script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var Giver_id = $(this).attr("Id");  
           $.ajax({  
                url:"Giver_full_details.php",  
                method:"post",  
                data:{Giver_id:Giver_id},  
                success:function(data){  
                     $('#Giver__detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
                 
                            </div>
                        </div>
                    </div>
                </main>
                
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

         <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    </body>
</html>
