
<?php
require('config.php');
$ctr = $_POST['ctr'];
$query="update order_table set Queue='4' where OrderNo = '$ctr' and Queue='3'";
mysqli_query($conn,$query);

$name=$_POST['uname'];
$sum=$_POST['sum'];

$query="SELECT Merit from custinfo where uname='$name'";
$query2=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($query2);
$mer=$row['Merit'];

$sum=$mer-$sum;
$query="update custinfo set Merit=$sum where uname='$name'";
mysqli_query($conn,$query);





header("location:credeem.php");
?>