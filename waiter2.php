<?php
require('config.php');
session_start();
$name=mysqli_real_escape_string($conn,$_POST['wname']);
$pass= mysqli_real_escape_string($conn,$_POST['wpass']);

$query="SELECT * FROM waiter WHERE wname='$name'";
//$query2=mysqli_query($conn,$query);
/*$row=mysqli_fetch_assoc($query2);

$count=mysqli_num_rows($query2);
*/
$res = mysqli_query($conn,$query);
if(mysqli_fetch_array($res) <=0){
 echo"Wrong username";
 header("refresh:2;maki_waiter.html");
}
else{
    while($row = mysqli_fetch_assoc($res)):
        $ver = password_verify($pass, $row['wpass']);
        if($ver){
            $_SESSION['wname'] = $row['wname'];
            $_SESSION['wno']=$row['WNO'];
            header("location:Login-m2.php");
        }
        else{
            echo "Wrong Password";
            header("refresh:2; maki_waiter.html");
        }
    endwhile;
}
echo "fdfdfd";
/*
if($name==""){
    header("location:waiter.html");
}
else if($count==1){
    $_SESSION['wno']=$row['WNO'];
    header("location: login-m2.php");
}
else{
    header("location:waiter.html");
} 
  */  

?>

