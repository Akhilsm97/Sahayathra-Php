<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
$sql="delete from giver_dash where Id=$id";
mysqli_query($conn,$sql);
header('location:admin.php');



?>