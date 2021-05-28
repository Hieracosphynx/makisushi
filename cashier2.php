
<?php
require('config.php');
session_start();
$ctr = $_POST['ctr'];
$_SESSION['ctr']=$ctr;
$query="update order_table set Queue='0' where OrderNo = '$ctr' and Queue='1'";
mysqli_query($conn,$query);

$name=$_POST['uname'];
$sum=$_POST['sum'];

$query="SELECT Merit from custinfo where uname='$name'";
$query2=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($query2);
$mer=$row['Merit'];

$sum=floor(($sum/50))+$mer;
$query="update custinfo set Merit=$sum where uname='$name'";
mysqli_query($conn,$query);

header("location:cashier.php");
?>