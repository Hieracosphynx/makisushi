<?php
require('config.php');
session_start();
$name=$_POST['uname'];
$pass=$_POST['upass'];

$query="SELECT uname,password from custinfo where uname='$name'";

$query2=mysqli_query($conn,$query);
$res=mysqli_query($conn,$query);

if(mysqli_fetch_array($res) <= 0){
       header("location:redeem.html");
}
while($row = mysqli_fetch_assoc($query2)):
    $ver = password_verify($pass, $row['password']);
    if($ver){
        $_SESSION['name']=$name;
        $_SESSION['tnum']='';
        $_SESSION['ctr']='';
        $_SESSION['rew']='1';
        header("location:redeem3.php");
    }
        else{
        header("location:redeem.html");
        }
endwhile;

?>