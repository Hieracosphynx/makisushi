<?php

require('config.php');
session_start();

$sum=$_POST['sum'];
$mer=$_SESSION['mer'];
$name = $_SESSION['name'];
$ctr = $_SESSION['ctr'];
$tnum= $_SESSION['tnum'];

if($mer>$sum){
$query="update order_table set Queue='3' where OrderNo = '$ctr' and Queue='2'";
mysqli_query($conn,$query);
header("location:login-m2.php");
}
else
{
    echo "<h1>Not Enough Points</h1>";
    echo "<a href='func3.php'><button type='button'>GO Back</button></a>";
}
?>
