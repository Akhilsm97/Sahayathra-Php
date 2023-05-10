
<html>
    <head></head>
    <body><h1>HAI</h1></body>
</html>





<?php
include_once 'dbconnection.php';
$conn = mysqli_connect('localhost','root','','sahayathra');


if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}else{
    echo 'Connection Successfull';
}
if(isset($_POST['submit']))
{	 
    $name= $_POST['Name'];
    echo $name;
    $aaddhar = $_POST['aaddhar'];
    $address = $_POST['address'];
    $mobno = $_POST['mobno'];
    $native = $_POST['native'];
    $nationality = $_POST['nationality'];
    $car_type = $_POST['car_type'];

    $filename = $_FILES['imagename']['name'];
    $filetmpname = $_FILES['imagename']['tmp_name'];
//folder where images will be uploaded
   $folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
     move_uploaded_file($filetmpname, $folder.$filename);

    $password = $_POST['password'];
	 $sql =  "INSERT INTO `trip_giver`( `Name`, `aaddhar`, `address`, `mobno`, `native`, `nationality`, `car_type`, `imagename`) VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
   $result = mysqli_query($conn,$sql);
   if($result)
   {
     echo "<p style= 'color:green;margin-left:100px;'><b>Data Inserted Successfully !</b></p>";
   }else{
     echo "Not Inserted Successfully ";
   }
}

?>