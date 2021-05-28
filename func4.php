<?php
//DELETE
require('config.php');
//query
session_start();
$fid = $_POST['fid'];
$qty = $_POST['qty'];
$ctr = $_SESSION['ctr'];

$query="delete from orderdetails where foodid = '$fid' and quantity= '$qty' and OrderNo='$ctr'";
mysqli_query($conn,$query);

header("location:func3.php");

?>