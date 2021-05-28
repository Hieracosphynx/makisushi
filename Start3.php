<?php
require('config.php');
session_start();
$sum=$_POST['sum'];
$ctr = $_SESSION['ctr'];
$query="update order_table set Queue='1' where OrderNo = '$ctr' and Queue='2'";
mysqli_query($conn,$query);

//$name=$_SESSION['name'];


header("location:login-m2.php");
?>
