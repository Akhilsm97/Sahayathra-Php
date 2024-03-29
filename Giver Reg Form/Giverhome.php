
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giver Home</title>
     <!-- Bootstrap CSS -->
     
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
  
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/rating.css">
  <link rel="stylesheet" href="css/style123.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style> 
       


    </style> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <p class="navbar-text"  style="margin-left:100px; color:white;font-family: "Lucida Console", "Courier New", monospace;">
	Welcome

	<?php
	session_start();
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        echo $username;
	}
?> !
	</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav " style="margin-left:500px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link view_data" href="#" style="color:white;" data-toggle="modal" data-target="#exampleModal">Make a Trip</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" data-toggle="modal" data-target="#exampleModals">View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accept.php" style="color:white;">Acceptance <span class="badge  badge-danger" style="background:red;">
              <?php
              $conn = mysqli_connect('localhost','root','','sahayathra');
              $sql = "SELECT count(Id) as Id FROM `payment` where req_status = 'pending' and Giver_Name= '$username' ";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result))
                    {
                      echo $row['Id'];
                    }
              ?>
          
          </span>
  <span class="sr-only">unread messages</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;" data-toggle="modal" data-target="#feedbackmodal">Feedback</a>
        </li>
        <li class="nav-item dropdown">
                    <a class="nav-link " id="userDropdown"  style="color:white;" href="logout.php"><i class="fas fa-user fa-fw"></i></a>
                    
                       
                    </div>
                </li>
      </ul>
    </div>
  </div>
</nav>
	<!-- Carousel -->

<div class="untitled">
	<div class="untitled__slides">
		<div class="untitled__slide">
			<div class="untitled__slideBg"></div>
			<div class="untitled__slideContent">
				<span style="font-size:50px;">SAHAYATHRA</span> <br><br>
				<span style="font-size:30px;font-style: italic;"><strong>"Remember that happiness is a way of travel, not a destination."</strong></span>
				
			</div>
		</div>
		<div class="untitled__slide">
			<div class="untitled__slideBg"></div>
			<div class="untitled__slideContent">
				
				<span style="font-size:50px;">SAHAYATHRA</span> <br><br>
				<span style="font-size:30px;font-style: italic;"><strong>"The world is a book and those who do not travel read only one page."</strong></span>
			
			</div>
		</div>
		<div class="untitled__slide">
			<div class="untitled__slideBg"></div>
			<div class="untitled__slideContent">
				<span style="font-size:50px;">SAHAYATHRA</span> <br><br>
				<span style="font-size:30px;font-style: italic;"><strong>“Jobs fill your pockets, adventures fill your soul.”</strong></span>
			
			</div>
		</div>
		<div class="untitled__slide">
			<div class="untitled__slideBg"></div>
			<div class="untitled__slideContent">
				<span style="font-size:50px;">SAHAYATHRA</span> <br><br>
				<span style="font-size:30px;font-style: italic;"><strong>“Travel is the only thing you buy that makes you richer.”</strong></span>
				
			</div>
		</div>
	</div>
	<div class="untitled__shutters"></div>
</div>



<!---------Modal Host----------------------->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"style="padding-top:120px;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document"style="padding-top:100px;" >
    <div class="modal-content"  style="background-color:white; width:560px; ">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:25px; font-style: italic; margin-left:220px;">Trip Host</h5>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body"style="margin-top:-40px;">
       

      <div class="signup-form">
    <form action="Trip_host.php" method="post">
		<h2>Register</h2>
		<div class="form-group">
        	<input type="text" class="form-control" name="Name"  value= <?php
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        echo $username;
	}
?>     required="required" readonly>
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="start" placeholder="Start" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="destination" placeholder="Destination" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="time" placeholder="Time" required="required">
        </div>
        <div class="form-group">
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="veh_model" placeholder="Vehicle Model" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="price" placeholder="Amount" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="seat" placeholder="No of Seats" required="required">
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Host</button>
        </div>
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 



<!-- Modal for view -->
<div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"style="margin-top:-60px; margin-left:1000px;">
  <div class="modal-dialog modal-dialog-centered  modal-lg " role="document"style="padding-top:100px; " >
    <div class="modal-content"  style="background-color:white; width:360px; border-radius:50px 20px 50px 20px;">
      <div class="modal-header" >
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:red;">
          <span aria-hidden="true" style="color:red;">&times;</span>
        </button>
      </div>
      <div class="modal-body shadow-lg p-3 mb-5 bg-white rounded"style="width:40px;">
	  <div class="container">
      <div class="row">
  <div class="col-sm-2"><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" style="background:orange;color:white;text-decoration:none; padding:10px 10px 10px 10px;margin-top:10px; border-radius:10px 5px 10px 5px;">Profile</a></div>
  <div class="coll-sm-2"><a href="host_details.php" style="background:orange;color:white;text-decoration:none; padding:10px 10px 10px 10px;margin-top:10px; border-radius:10px 5px 10px 5px;">Trip Details</a></div>
  <div class="col"></div>
  <div class="col"></div>
</div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"style="padding-top:200px;" >
  <div class="modal-dialog modal-lg modal-dialog-centered " style="margin-left:100px;">
    <div class="modal-content " style="border-radius:50px 20px 50px 20px;")>
	<div class="modal-header "style="backbround-color:red;" >
     
	 <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:red;">
	   <span aria-hidden="true" style="color:red;">&times;</span>
	 </button>
   </div>
<div class="modal-body">
<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
	}
$sql = "SELECT * FROM `trip_giver` where Giver_Name='".$username."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
   <div class="card mb-4  shadow-lg p-3 mb-5 bg-white rounded " style="max-width: 960px;margin-top:-15px;border-radius:10px 20px 10px 20px;">
  <div class="row g-0" >
    <div class="col-md-3">
	<h5 class="card-title"style="font-size:20px;font-family:times, serif; margin-left:10px; ">Trip Giver Details</h5>
      <img src="/sahayathra/giver Reg Form/imagesuploadedf/<?php echo $row['imagename'];?>" alt="..." class="rounded-circle" width="200px" height="200px" style="margin-top:80px;margin-left:15px;">
    </div>
    <div class="col-md-8" style="margin-left:50px;">
      <div class="card-body" style=" ">
       
        <p class="card-text1"style="font-size:20px;"><b>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['Giver_Name']?></b></p>
        <p class="card-text1"style="font-size:20px;"><b>Aaddhar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['aaddhar']?><b></p>
        <p class="card-text1"style="font-size:20px;"><b>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['address']?></b></p>
        <p class="card-text1"style="font-size:20px;"><b>Mob No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['mobno']?></b></p>
        <p class="card-text1"style="font-size:20px;"><b>Native&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['native']?></b></p>
        <p class="card-text1"style="font-size:20px;"><b>Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['nationality']?></b></p>
        <p class="card-text1"style="font-size:20px;"><b>Vechicle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['car_type']?></b></p>
      </div>
    </div>
  </div>
</div>
    <?php
   
  }
}
?> 

  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Close</button>
      </div>
</div>
</div>
    </div>
  </div>
</div>



<!-- Feedback Modal -->
<div class="modal fade" id="feedbackmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding-top:100px;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Rate the Trip</h5>
         <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:20px;"> <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <div class="signup-form">
    <form action="feedback.php" method="post">
		<h2>Rate the Trip</h2>
		<div class="form-group">
        	<input type="text" class="form-control" name="Giver_Name"  value= <?php
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        echo $username;
	}
?>     required="required" readonly>
        </div>
        <div class="form-group">
        <textarea type="text" class="form-control mb-10" placeholder="What would you like to say about this Trip" name="feedback"></textarea>
        </div>
        <div class="stars">
                     <input class="star star-5" id="star-5" type="radio" name="star" value="5 star" /> 
                     <label class="star star-5" for="star-5">
                   
                     </label> <input class="star star-4" id="star-4" type="radio" name="star" value="4 star" /> 
                     <label class="star star-4" for="star-4"></label> 
                     <input class="star star-3" id="star-3" type="radio" name="star"  value="3 star" />
                     <label class="star star-3" for="star-3"></label> 
                     <input class="star star-2" id="star-2" type="radio" name="star"  value="2 star" />
                     <label class="star star-2" for="star-2"></label> 
                     <input class="star star-1" id="star-1" type="radio" name="star" value="1 star"/> 
                     <label class="star star-1" for="star-1"></label> 
            </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
</div>
      </div>
      </div>
      
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
      
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>