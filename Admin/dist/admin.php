<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <style>
        .top_x_div{
            @include stagger-anim-delay(10, 0.3s);
		
		animation: 1s animation-lightspeed-in ease forwards;
		background: $color-white;
		list-style: none;
		margin-right: rem(4);
		opacity: 0;
		width: 100%;
		}
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
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw" style="color:white;"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">User Details</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                              Users Details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                      Display
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="Giver_details.php">Giver Details</a>
                                            <a class="nav-link" href="Taker_details.php">Taker Details</a>
                                          
                                        </nav>
                                    </div>
                                    
                              
                                
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Approve &nbsp;&nbsp;<span class="badge  badge-danger" style="background:red;">
                                <?php
              $conn = mysqli_connect('localhost','root','','sahayathra');
              $sql = "SELECT count(Id) as Id FROM `login_table` where status = 0 ";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result))
                    {
                      echo $row['Id'];
                    }
              ?>
                                </span>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="approve_taker.php">Trip Taker
                                    &nbsp;&nbsp;<span class="badge  badge-danger" style="background:red;">
                                    
                                    <?php
              $conn = mysqli_connect('localhost','root','','sahayathra');
              $sql = "SELECT count(Id) as Id FROM `login_table` where status = 0 and type='Taker' ";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result))
                    {
                      echo $row['Id'];
                    }
              ?>
                                    </span>
                                    </a>
                                    <a class="nav-link" href="approve_giver.php">Trip Giver
                                    &nbsp;&nbsp; <span class="badge  badge-danger" style="background:red;">

                                       
                                    <?php
              $conn = mysqli_connect('localhost','root','','sahayathra');
              $sql = "SELECT count(Id) as Id FROM `login_table` where status = 0 and type='Giver' ";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result))
                    {
                      echo $row['Id'];
                    }
              ?>

                                    </span>
                                    </a>
                                </nav>
                            </div>
                           
                            <div class="sb-sidenav-menu-heading">Trip Details</div>
                            <a class="nav-link" href="trip_hosted.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Trip Hosted
                            </a>
                            <a class="nav-link" href="trip_taken.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Trip Taken
                            </a>
                            <a class="nav-link" href="feedback.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Feedback
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                            <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                 <div class="card-body">
                                     <h5 class="card-title">Giver Registered</h5>
                                       <p class="card-text">

                                                <?php
                                                $conn = mysqli_connect('localhost','root','','sahayathra');
                                                // Check connection
                                                if (!$conn) {
                                                  die("Connection failed: " . mysqli_connect_error());
                                                }
                                                
                                                $sql = "SELECT MAX(Id) AS Id FROM trip_giver";
                                                $result = mysqli_query($conn, $sql);
                                                if($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                         <h1 class="counter-count"><?php echo $row['Id']?></h1>
                                                  <?php  
                                                }
                                                ?>

                                       </p>
                            
                                  </div>
                           </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                            <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                 <div class="card-body">
                                     <h5 class="card-title">Taker Registered</h5>
                                       <p class="card-text">

                                                <?php
                                                $conn = mysqli_connect('localhost','root','','sahayathra');
                                                // Check connection
                                                if (!$conn) {
                                                  die("Connection failed: " . mysqli_connect_error());
                                                }
                                                
                                                $sql = "SELECT MAX(Id) AS Id FROM trip_taker";
                                                $result = mysqli_query($conn, $sql);
                                                if($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                         <h1 class="counter-count"><?php echo $row['Id']?></h1>
                                                  <?php  
                                                }
                                                ?>

                                       </p>
                            
                                  </div>
                           </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                 <div class="card-body">
                                     <h5 class="card-title">Trip Hosted</h5>
                                       <p class="card-text">

                                                <?php
                                                $conn = mysqli_connect('localhost','root','','sahayathra');
                                                // Check connection
                                                if (!$conn) {
                                                  die("Connection failed: " . mysqli_connect_error());
                                                }
                                                
                                                $sql = "SELECT MAX(Id) AS Id FROM giver_dash";
                                                $result = mysqli_query($conn, $sql);
                                                if($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                         <h1 class="counter-count"><?php echo $row['Id']?></h1>
                                                  <?php  
                                                }
                                                ?>

                                       </p>
                            
                                  </div>
                           </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                            <div class="card  shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                 <div class="card-body">
                                     <h5 class="card-title">Trip Taken</h5>
                                       <p class="card-text">

                                                <?php
                                                $conn = mysqli_connect('localhost','root','','sahayathra');
                                                // Check connection
                                                if (!$conn) {
                                                  die("Connection failed: " . mysqli_connect_error());
                                                }
                                                
                                                $sql = "SELECT count(Id) AS Id FROM payment where payment_status='successfull'";
                                                $result = mysqli_query($conn, $sql);
                                                if($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                         <h1 class="counter-count"><?php echo $row['Id']?></h1>
                                                  <?php  
                                                }
                                                ?>

                                       </p>
                            
                                  </div>
                           </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        User Info
                                    </div>
                                    <div class="card-body"><div id="piechart_3d" style=" width:700px; height:230px;"></div></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Total Trip
                                    </div>
                                    <div class="card-body"><div id="top_x_div" style="width: 700px; height: 230px;"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                              Trip Details
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Giver Name</th>
                                                <th>Start</th>
                                                <th>Destination</th>
                                                <th>Time</th>
                                                <th>Date</th>
                                                <th>Vehicle Model</th>
                                                <th>Price</th>
                                                <th>Seat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                               <?php
                                               $sql = "select * from giver_dash";
                                               $result = mysqli_query($conn,$sql);
                                               while ($row = mysqli_fetch_array($result)) {
                                                 ?>
                                                  
                                              
                                            <tr>
                                                <td><?php echo $row['Id'];?></td>
                                                <td><?php echo $row['Giver_Name'];?></td>
                                                <td><?php echo $row['start'];?></td>
                                                <td><?php echo $row['destination'];?></td>
                                                <td><?php echo $row['time'];?></td>
                                                <td><?php echo $row['date'];?></td>
                                                <td><?php echo $row['veh_model'];?></td>
                                                <td><?php echo $row['price'];?></td>
                                                <td><?php echo $row['seat'];?></td>
                                                <td><a href="Remove.php?Id=<?php echo $row['Id']?>" style="text-decoration:none; background-color:green; padding:7px 7px 7px 7px; border-radius:5px;color:white;">Remove</a></td>
                                                
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            
          ['', 'Total Trip'],
          <?php
           $sql = "SELECT date, COUNT(*) as Date
           FROM
              giver_dash
           GROUP BY
               date
           HAVING 
              COUNT(*) > 0";
           $result = mysqli_query($conn,$sql);
           while($row = mysqli_fetch_array($result))
           {

          ?>


          ["<?php echo $row['date']?>", <?php echo $row['Date']?>],
          <?php
           }
          ?>
         
        ]);

        var options = {
          bars: 'vertical', // Required for Material Bar Charts.
          type: 'line',
          
          
          axes: {
            x: { width:"10%",
             
              0: { side: 'bottom'} // Top x-axis.
            }
          },
          bar: { groupWidth: "50%"  }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>


<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
          $sql = "SELECT type, COUNT(*) as Type
          FROM
            login_table
          GROUP BY
              type
          HAVING 
             COUNT(*) > 0";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result)) {
              ?>
          ['<?php echo $row['type']?>',    <?php echo $row['Type']?>],
           <?php
          }
           ?>
         
        ]);

        var options = {
            width: '100%',
            height: '100%',
          is3D: true,
          chartArea: {
        left: "3%",
        top: "3%",
        height: "97%",
        width: "97%"
    }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="script.php"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
