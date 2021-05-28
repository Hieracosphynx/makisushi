<?php
require('config.php');
session_start();

$name=$_POST['customer'];
$query="SELECT uname from custinfo where uname='$name'";
$query2=mysqli_query($conn,$query);
$count=mysqli_num_rows($query2);
if($name==""){
    $_SESSION['tnum']='';
    $_SESSION['ctr']='';
    $_SESSION['name']="Guest";
    $_SESSION['rew']='0';
    header("location:Start.php");
}
else if($count==0){
    echo $count;
   header("location:login-m2.php");
}
else{
    $_SESSION['name']=$name;
    $_SESSION['tnum']='';
    $_SESSION['ctr']='';
    $_SESSION['rew']='0';
    header("location:Start.php");
}
?>
