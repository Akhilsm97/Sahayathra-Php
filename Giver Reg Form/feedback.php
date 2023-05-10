<?php
error_reporting(0);

$conn = mysqli_connect('localhost','root','','sahayathra');


if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}else{
    echo 'Connection Successfull <br>';
}
if(isset($_POST['submit']))
{	 
    $Name= $_POST['Giver_Name'];
    $feedback = $_POST['feedback'];
    $star = $_POST['star'];
    echo $Name;
    echo $feedback;
    echo $star;
	 $sql = "INSERT INTO `feedbacks`(`Giver_Name`,`feedback`,`star`) VALUES ('$Name','$feedback','$star')";
   $result = mysqli_query($conn,$sql);
   if($result)
   {
     header("Location: /sahayathra/giver Reg Form/Giverhome.php");
   }else{
     echo "Not Inserted Successfully ";
   }
}

?>