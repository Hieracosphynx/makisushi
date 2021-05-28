<?php
require('config.php');
$tnum=$_POST['tnum'];
$name=$_POST['customer'];
$ctr=$_POST['ctr'];
session_start();
$mer=$_SESSION['mer'];
echo "<!DOCTYPE HTML>";
echo "<!-- START -->";

echo "<html style='padding-bottom:100px;'>";
echo "<meta name='viewport' content ='width-device-width, initial-scale=1.0'>";

echo "<h1>Order of ";
echo $name;
echo "<br>Points: ";
echo $mer;
echo "</h1>";


		
echo "<form method='POST' action='redeem5.php'>";

echo "table <input type='text' name='tnum' value='$tnum'>";
echo "<input type='hidden' name='ctr' value='$ctr'>";
echo "<input type='hidden' name='customer' value='$name'>";
		
echo "<center>";
echo "<div style='position:fixed;	bottom: 0;width: 100%;padding-bottom:20px;background-color:orange;padding-top:20px;'>";
echo "<input type='number' name='qty' value='1'> "; 
echo "</div> </center>";

$query="select * from Menu where FoodID like '%VM%' order by length(FoodID),FoodID";

$query2=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($query2)){

$code=$row['FoodID'];
echo $row['FoodName'];
echo "<input type='submit' value='$code' name='Order'> <br>";
}
echo "</form>";

echo "<form method='POST' action='redeem6.php'>";
echo "<input type='hidden' name='ctr' value='$ctr'>";
echo "<input type='hidden' name='customer' value='$name'>";
echo "<input type='submit' value='Reveiw'>";
  
  
  
echo "</html>";
?>