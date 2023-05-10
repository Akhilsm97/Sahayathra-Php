
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taker Home</title>
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
        .navbar-nav { 
            margin-left: auto; 
        } 
        .nav-item{padding-left:30px; color:white;}
        .nav-link{color:white;}
        .form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  

    </style> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <p class="navbar-text"  style="margin-left:110px; color:white;font-family: "Lucida Console", "Courier New", monospace;">
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
          <a class="nav-link view_data" href="trip_details.php" style="color:white;" >Take a Trip</a>
        </li>
		<li class="nav-item">
		<a class="nav-link " id="userDropdown"  style="color:white;" href="payment.php"><i class="far fa-envelope"></i>  <span class="badge  badge-danger" style="background:red;">
		<?php
              $conn = mysqli_connect('localhost','root','','sahayathra');
              $sql = "SELECT count(Id) as Id FROM `payment` where req_status = 'Accepted'and payment_status='pending' and Taker_Name= '$username' ";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result))
                    {
                      echo $row['Id'];
                    }
              ?>
          
		</span>
  <span class="sr-only">unread messages</span>
		</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="receipt_info.php" style="color:white;">Receipt</a>
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