<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
$sql="delete from login_table  where Id=$id";
mysqli_query($conn,$sql);
header('location:approve_taker.php');



?>