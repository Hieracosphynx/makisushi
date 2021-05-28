<?php
require('config.php');

$name= $_POST['wname'];
$pass=password_hash($_POST['wpass'], PASSWORD_DEFAULT, ["cost" => 12]);


$qry="INSERT INTO waiter (wname,wpass) values ('$name','$pass')";
mysqli_query($conn,$qry);

header("location:maki_waiter.html");
?>

