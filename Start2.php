<?php
require('config.php');
session_start();
$ctr= $_SESSION['ctr'];
$qry="delete from orderdetails where OrderNo=$ctr";
$qry2="delete from order_table where OrderNo=$ctr";

mysqli_query($conn,$qry);
mysqli_query($conn,$qry2);
header("location:login-m2.php");
?>

