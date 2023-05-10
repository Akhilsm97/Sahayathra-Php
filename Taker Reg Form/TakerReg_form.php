<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Trip Taker</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

       
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Taker Registration </h2>
                    <form method="POST" action="" enctype="multipart/form-data" name = "myform" onsubmit = " return validate()">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="Taker_Name" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 " type="text" placeholder="Aaddhar ID" name="aaddhar">
                          
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                
                                           
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Mobile no" name="mobno">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Native" name="native">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nationality">
                                    <option disabled="disabled" selected="selected">Nationality</option>
                                    
                                    <option value="Afghan">Afghan</option>
                                            <option value="Albanian">Albanian</option>
                                            <option value="Algerian">Algerian</option>
                                            <option value="Argentinan">Argentinan</option>
                                            <option value="Australian">Australian</option>
                                            <option value="Austrian">Austrian</option>
                                            <option value="Bangladeshi">Bangladeshi</option>
                                            <option value="Belgian">Belgian</option>
                                            <option value="Bolivian">Bolivian</option>
                                            <option value="Batswana">Batswana</option>
                                            <option value="Brazilian">Brazilian</option>
                                            <option value="Bulgarin">Bulgarin</option>
                                            <option value="Cambodian">Cambodian</option>
                                            <option value="Cameroonian">Cameroonian</option>
                                            <option value="Canadaian">Canadaian</option>
                                            <option value="Chilean">Chilean</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Colombian">Colombian </option>
                                            <option value="Costa Rican">Costa Rican</option>
                                            <option value="Croatian">Croatian</option>
                                            <option value="Cuban">Cuban</option>
                                            <option value="Czech">Czech </option>
                                            <option value="Danish">Danish</option>
                                            <option value="Dominican ">Dominican </option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egyptian">Egyptian</option>
                                            <option value="Salvadorian">Salvadorian</option>
                                            <option value="English">English</option>
                                            <option value="Finnish">Finnish</option>
                                            <option value="French">French</option>
                                            <option value="German">German</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Indonesian">Indonesian</option>
                                            <option value="Iranian">Iranian</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Kuwaiti">Kuwaiti</option>
                                            <option value="Libyan">Libyan</option>
                                            <option value="Malaysian">Malaysian</option>
                                            <option value="Mexican">Mexican</option>
                                            <option value="Nepalese">Nepalese</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nigerian">Nigerian</option>
                                            <option value="Pakistani">Pakistani</option>
                                            <option value="Philippine">Philippine</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Saudi">Saudi</option>
                                            <option value="Serbian">Serbian</option>
                                            <option value="Singaporean">Singaporean</option>
                                            <option value="South African">South African</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Sri Lankan">Sri Lankan</option>
                                            <option value="Swedish">Swedish</option>
                                            <option value="Syrian">Syrian</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Tunisian">Tunisian</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Ukrainian">Ukrainian</option>
                                            <option value="Others">Others</option>
                                           
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                      
                        <div class="input-group file">
                            <input class="input--style-3 file" type="file" placeholder="Choose" name="uploadfile">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="password" name="password">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/validate.js"></script>
    <?php

$conn = mysqli_connect('localhost','root','','sahayathra');


if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}else{
    echo 'Connection Successfull <br>';
}
if(isset($_POST['submit']))
{	 
    $Name= $_POST['Taker_Name'];
    echo "$Name <br>";
    $aaddhar = $_POST['aaddhar'];
    echo "$aaddhar <br>";
    $address = $_POST['address'];
    echo "$address <br>";
    $mobno = $_POST['mobno'];
    echo "$mobno <br>";
    $native = $_POST['native'];
    echo "$native <br>";
    $nationality = $_POST['nationality'];
    echo "$nationality <br>";

$filename = $_FILES["uploadfile"]["name"];
    $filetmpname = $_FILES["uploadfile"]["tmp_name"];
//folder where images will be uploaded
   $folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
     move_uploaded_file($filetmpname, $folder.$filename);
  echo "$filename <br>";
    $password = $_POST['password'];
    echo "$password <br>";
	 $sql =  "INSERT INTO `trip_taker`(`Taker_Name`, `aaddhar`, `address`, `mobno`, `native`, `nationality`, `imagename`, `password`) VALUES ('$Name','$aaddhar','$address','$mobno','$native','$nationality','$filename','$password')";
   $result = mysqli_query($conn,$sql);
   $sql1 ="INSERT INTO `login_table`(`Name`, `password`, `type`, `status`) VALUES ('$Name','$password','Taker','0')";
   $result1 = mysqli_query($conn,$sql1);
   if($result)
   {
	   echo "<script>window.location='/sahayathra/login/login.php'</script>";
	   echo "Inserted Successfully ";
   }else{
     echo "Not Inserted Successfully ";
   }
}

?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

