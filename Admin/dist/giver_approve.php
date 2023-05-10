<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
$sql="update login_table set status=1 where Id=$id";
mysqli_query($conn,$sql);
header('location:approve_giver.php');



?>