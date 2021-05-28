<?php
require('config.php');
require('functions.php');
if(isset($_POST['add'])){
    addMenu();
}
?>
<html>
<head>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="FID" placeholder="FoodID">
    <input type="text" name="FoodName" placeholder="FoodName">
    <input type="numbers" name="uPrice" placeholder="Unit Price">
    <input type="submit" name="add" value="ADD">
</form>
</body>
</html>