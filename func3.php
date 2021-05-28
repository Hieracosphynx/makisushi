<?php
require('config.php');
session_start();
$name = $_SESSION['name'];
$ctr = $_SESSION['ctr'];
$tnum= $_SESSION['tnum'];
$qry="select orderdetails.foodid,menu.foodname,menu.unitprice,orderdetails.quantity from menu,orderdetails,order_table where order_table.orderno=$ctr and orderdetails.orderno=$ctr and menu.foodid=orderdetails.foodid";
$qry2=mysqli_query($conn,$qry);

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

echo    "<title>Waiter (Makisushi)</title>";
echo  "</head>";
    
echo "<body>";

echo "<div class='container-fluid main-container'>";
        
echo        "<div class='container col-sm-12 parent-second'>";
echo            "<div class='col-sm-10 offset-sm-1 second-container'>";
                
echo            "<div class='holder'>";

echo "<div class='cashier-header'>";
echo "<h3>Orders of $name</h3>";
echo "</div>";
    
/* check if ordering or redeem */
if($_SESSION['rew']==1){
    echo "<label class='points'>POINTS:";
    echo $_SESSION['mer'];
    $temp='redeem8.php';
    echo "</label>";
}
else{
    $temp='Start3.php';
}



/* check if ordering or redeem */
/*echo "</h1>";
echo "<table>";
echo "<tr><th>Food ID</th><th>Food Name</th><th>Unit Price</th><th>Quantity</th></tr>";*/

    /* TESTING BOOTSTRAP */
echo "<table class='col-sm-12 cool table-hover table-striped table-warning'>";
echo  "<thead class='table-head thead-dark bg-dark'>";
echo    "<tr class='head-center'>";
echo      "<th>ID</th>";
echo      "<th>Name</th>";
echo      "<th>Price</th>";
echo      "<th>Quantity</th>";
echo      "<th></th>";
echo    "</tr>";
echo  "</thead>";

$sum=0;

while ($row=mysqli_fetch_array($qry2)){
    
    $item=0;
    
echo  "<tbody>";
echo    "<tr class='table-row'>";
echo        "<td>";
$fid=$row['foodid'];
echo $fid;
echo        "</td>";
echo        "<td>";
echo $row['foodname'];
echo        "</td>";
echo        "<td>";
$UP=$row['unitprice'];
echo $UP;
echo        "</td>";
echo        "<td>";
$qty=$row['quantity'];
echo $qty;
echo        "</td>";
echo "<td>";
$item=$UP*$qty;
$sum=$sum+$item;
echo "<form method='POST' action='func4.php'>";
echo "<input type='hidden' value='$fid' name='fid'>";
echo "<input type='hidden' value='$qty' name='qty'>";
echo "<input class='col-sm-1 btn-sm btn-danger' type='submit' value=''>";
echo "</form>";
    echo "</td>";
echo    "</tr>";
    
   /* echo "<tr><td>";
    $fid=$row['foodid'];
    echo $fid;
    echo "</td><td>";
    echo $row['foodname'];
    echo "</td><td>";
    $UP=$row['unitprice'];
    echo $UP;
    echo "</td><td>";
    $qty=$row['quantity'];
    echo $qty;
    echo "</td><td>";
    $item=$UP*$qty;
    $sum=$sum+$item;
    

    echo "<form method='POST' action='func4.php'>";
    echo "<input type=hidden name='fid' value='$fid'>";
    echo "<input type=hidden name='qty' value='$qty'>";
    echo "<input type='submit' value='delete'>";
    echo "</form>";
    echo "</td></tr>";*/
    
    }
    echo "<tr><td>TOTAL</td><td></td><td>$sum</td><td></td><td></td></tr>";
    echo "</table>";
?>

<a  href="Start.php"><button class='marg btn btn-lg btn-dark col-sm-12' type="button">Add More </button></a>

<a  href="Start2.php"><button class='marg btn btn-sm btn-dark col-sm-12' type="button">Cancel</button></a>

<form method="POST" action="<?php echo $temp?>">
<input type="hidden" name="sum" value='<?php echo $sum?>'>
<input class='marg1 btn btn-lg btn-success col-sm-12' type="submit" value="New Order">
</form>


