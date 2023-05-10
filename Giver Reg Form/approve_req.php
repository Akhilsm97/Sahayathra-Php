<?php
session_start();
if(ISSET($_SESSION['Name'])){
    $username = $_SESSION['Name'];
}

$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
$sq = "select giver_dash.seat from giver_dash where Giver_Name= '".$username."'";
$result = mysqli_query($conn, $sq);
$row = mysqli_fetch_array($result);
$a = $row['seat'];
echo $a;
$b = --$a;
echo $b;
if($b >=0 && !($b<0))
{
$sql="update payment set req_status='Accepted' where Id=$id";
mysqli_query($conn,$sql);
$sql1="update giver_dash set seat= $b where Giver_Name= '".$username."' ";
mysqli_query($conn,$sql1);
header('location:accept.php');
}
else
{
  $message = "Seats Are Filled ! Unable to Accept The Request";
    header('location:accept.php?message='.$message); 
}



?>
