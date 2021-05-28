
<?php
require('config.php');

session_start();
$name=$_SESSION['name'];
$wno=$_SESSION['wno'];
$tnum= $_POST['tnum'];
$qry="INSERT INTO order_table (uname,TableNum,WNO,Queue) values ('$name',$tnum,$wno,2)";
mysqli_query($conn,$qry);

$ctr= mysqli_insert_id($conn);
$_SESSION['tnum']=$tnum;
$_SESSION['ctr']=$ctr;
$order= $_POST['Order'];
$qty= $_POST['qty'];
$qry2="INSERT INTO orderdetails values ('$order',$qty,$ctr)";
mysqli_query($conn,$qry2);

header("location:Start.php");
?>


