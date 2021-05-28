<?php
session_start();
$_SESSION['uname'] = session_destroy();
header("refresh:0;url=index.php");
?>