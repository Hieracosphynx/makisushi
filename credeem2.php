<?php
require('config.php');
$ord = $_POST['ord'];
$fid = $_POST['fid'];
$query="delete from orderdetails where OrderNo=$ord and FoodID='$fid'";
mysqli_query($conn,$query);
header("location:credeem.php");
?>