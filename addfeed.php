<?php
session_start();
date_default_timezone_set('Asia/Manila');
require('config.php');

$feed = mysqli_real_escape_string($conn, $_POST['feed']);
$uname = mysqli_real_escape_string($conn,$_SESSION['uname']);

$qry="INSERT INTO misc VALUES('$uname','$feed',NOW())";
mysqli_query($conn,$qry);
mysqli_close($conn);
header("location: forum.php");

