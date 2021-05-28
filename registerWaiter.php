<?php
session_start();
require('functions.php');

checkAdmin();
if(isset($_POST['regWaiter'])){
    regWaiter();
}

?>

<html>
<head>

</head>

<body>
    <form action = ""  method="POST">
        <input type="text" name="wname" placeholder="E.g Joseph Lim">
        <input type="password" name="wpass" placeholder="password">
        <input type="submit" name="regWaiter">
    </form>    
</body>

</html>