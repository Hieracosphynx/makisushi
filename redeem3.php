<?php
require('config.php');
session_start();
$name=$_SESSION['name'];

$query="SELECT Merit from custinfo where uname='$name'";
$query2=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($query2);
$_SESSION['mer']=$row['Merit'];
header("location:Start.php");
?>