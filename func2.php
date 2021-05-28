<?php
require('config.php');
session_start();
$name= $_SESSION['name'];
$tnum= $_SESSION['tnum'];
$ctr=$_SESSION['ctr'];
$order= $_POST['Order'];
$qty= $_POST['qty'];
$qry2="INSERT INTO orderdetails values ('$order',$qty,$ctr)";
mysqli_query($conn,$qry2);

header("location:Start.php");
?>
