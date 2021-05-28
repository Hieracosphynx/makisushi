<?php
require('config.php');
$page = $_SERVER['PHP_SELF'];
$sec = "2";
$ord='';

echo "<html lang='en'>";
echo  "<head>";
echo    "<!-- Required meta tags -->";
echo    "<meta charset='utf-8'>";
echo    "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";

echo    "<!-- Bootstrap CSS -->";
echo    '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
      
echo    "<!-- Local Bootstrap CSS -->";
echo    '<link rel="stylesheet" href="css/bootstrap.min.css">';
echo    '<link rel="stylesheet" href="css/bootstrap.min.css.map">';
echo    '<link rel="stylesheet" href="css/bootstrap-grid.min.css">';
echo    '<link rel="stylesheet" href="css/bootstrap-grid.min.css.map">';
echo    '<link rel="stylesheet" href="css/bootstrap-reboot.min.css">';
echo    '<link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">';
    
echo    '<!-- Personal CSS -->';
echo    '<link rel="stylesheet" type="text/css" href="css/style2-makisushi2.css">';
      
echo    '<!-- Google Fonts -->';
echo    '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">';

echo    "<title>Cashier (Makisushi)</title>";
echo  "</head>";
    
echo "<body>";

echo "<div class='container-fluid main-container'>";
                
echo            "<div class='col-sm-12 holder-cashier'>";

/* WHERE THE MAGIC HAPPENS ========================================= */

echo "<meta name='viewport' content ='width-device-width, initial-scale=1.0'>";
$query="SELECT order_table.uname, order_table.OrderNo, order_table.TableNum, waiter.wname, orderdetails.FoodID,orderdetails.Quantity,menu.Foodname, menu.UnitPrice from waiter, orderdetails,menu,order_table where order_table.OrderNo=orderdetails.OrderNo and menu.FoodID=orderdetails.FoodID and order_table.Queue=3 and waiter.WNO=order_table.WNO order by order_table.OrderNo";

$query2=mysqli_query($conn,$query);

$qry="SELECT queue from order_table where queue=1";
$qry2=mysqli_query($conn,$qry);
$count=mysqli_num_rows($qry2);

echo "<div class='cashier-header'>";
echo    "<h3>REDEMPTION TABLE</h3>";
echo    "<a href='cashier.php'>For Ordering</a> : ";
echo     $count;
echo "</div>";

/*echo "<h1>REDEMPTION TABLE <br>";
echo "<a href='cashier.php'>For Ordering</a> : ";
echo $count;
echo "</h1>";*/

while ($row=mysqli_fetch_array($query2)){
    
   
    
    $fid=$row['FoodID'];
    $qty=$row['Quantity'];
    $fname=$row['Foodname'];
    $up=$row['UnitPrice'];

if ($ord != $row['OrderNo']){



    $ord=$row['OrderNo'];
    $uname=$row['uname'];
    $tnum=$row['TableNum'];
    $wname=$row['wname'];
    $fid=$row['FoodID'];
    $qty=$row['Quantity'];
    $fname=$row['Foodname'];
    $up=$row['UnitPrice'];
    
    $sum=0;

    $query3="SELECT menu.UnitPrice as UP, orderdetails.quantity as QTY from orderdetails,order_table,menu where orderdetails.OrderNo=$ord and order_table.OrderNo=$ord and menu.FoodID=orderdetails.FoodID and order_table.Queue=3";    
    $query4=mysqli_query($conn,$query3);
    while($row=mysqli_fetch_array($query4)){
    $x=$row['UP'];
    $y=$row['QTY'];
    $temp=$x*$y;
    $sum=$sum+$temp;
    }

    /*echo "</tr>";
    echo "</table>";
    echo "<hr>";*/
    
    echo "</tr>";
    echo "</table>";
    echo "<hr>";
    echo "<div class='new col-sm-12'>";
    echo    "<label>New Order</label>";
    echo "</div>";
    
    echo "<div class='button-form col-sm-12'>";
    echo "<form method='POST' action='credeem3.php'>";
    echo "<input type=hidden name='ctr' value='$ord'>";
    echo "<input type=hidden name='uname' value='$uname'>";
    echo "<input type=hidden name='sum' value='$sum'>";
    echo  "<input class='col-sm-12 btn btn-dark'type='submit' value='Finish'>";
    echo "</form>";
    echo "</div>";
    
    echo "<div class='bold-parent'>";
    echo "<div class='bold'>";
    echo    "UserName: &nbsp;";
    echo    "<label>$uname</label>";
    echo "</div>";
    echo "<div class='bold'>";
    echo    "Order Num: &nbsp;";
    echo    "<label>$ord</label>";
    echo "</div>";
    echo "<div class='bold'>";
    echo    "TableNum: &nbsp;";
    echo    "<label>$tnum</label>";
    echo "</div>";
    echo "<div class='bold'>";
    echo    "WaiterName: &nbsp;";
    echo    "<label>$wname</label>";
    echo "</div>";
    echo "<div class='bold'>";
    echo    "Total Amount: ";
    echo    "<label>Php $sum</label>";
    echo "</div>";
    echo "</div> <!-- End of bold-parent -->";
    
   /* echo "UserName: &nbsp;";
    echo $uname;
    echo "<br> Order Num: &nbsp;";
    echo $ord;
    echo "<br> TableNum: &nbsp;";
    echo $tnum;
    echo "<br> WaiterName: &nbsp;";
    echo $wname;
    echo "<br>";
    echo "Total Amount: ";
    echo $sum;
    echo "<br>";*/
    
    /* TESTING BOOTSTRAP */
echo "<table class='col-sm-12 cool table-hover table-striped table-warning'>";
echo  "<thead class='table-head thead-dark bg-dark'>";
echo    "<tr class='head-center'>";
echo      "<th>ID</th>";
echo      "<th>Quantity</th>";
echo      "<th>Name</th>";
echo      "<th>Price</th>";
echo      "<th>Amount</th>";
echo      "<th></th>";
echo    "</tr>";
echo  "</thead>";
    
   /* echo "<table>";
    echo "<tr><th>Food ID</th><th>Quantity</th> <th>Food Name</th><th>Unit Price</th><th>Amount</th></tr>";*/
    
}
    
echo  "<tbody>";
echo    "<tr class='table-row'>";
echo        "<td>$fid</td>";
echo        "<td>$qty</td>";
echo        "<td>$fname</td>";
echo        "<td>$up</td>";
$temp=$up*$qty;
echo        "<td>$temp</td>";
    echo "<td>";
    echo "<form method='POST' action='credeem2.php'>";
echo "<input type='hidden' value='$ord' name='ord'>";
echo "<input type='hidden' value='$fid' name='fid'>";
echo "<input class='col-sm-1 btn-sm btn-danger' type='submit' value=''>";
echo "</form>";
    echo "</td>";
echo    "</tr>";
    
/*echo "<tr><td>";
echo $fid; 
echo "</td><td>";
echo $qty;
echo "</td><td>";
echo $fname;
echo "</td><td>";
echo $up;
echo "</td><td>";
$temp=$up*$qty;
echo "$temp";
echo "</td><td>";
echo "<form method='POST' action='credeem2.php'>";
echo "<input type='hidden' value='$ord' name='ord'>";
echo "<input type='hidden' value='$fid' name='fid'>";
echo "<input type='submit' value='Delete'>";
echo "</form>";
echo "</td>";*/

}

/* WHERE THE MAGIC ENDS ========================================= */

echo  "</tbody>";
echo "</table>";

echo            "</div> <!-- End of holder -->"; 
        
echo "</div>";


?>



<html>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</html>
