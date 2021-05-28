<?php
session_start();
require('config.php');
require('functions.php');

$qry= "SELECT sum(orderdetails.Quantity*menu.UnitPrice) AS daily FROM order_table, orderdetails,menu WHERE orderdetails.OrderNo=order_table.OrderNo AND menu.FoodID=orderdetails.FoodID AND order_table.Queue=0 AND order_table.time_stamp >= current_date";
$qry2=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($qry2);
$daily=$row['daily'];

$qry="SELECT sum(orderdetails.Quantity*menu.UnitPrice) AS weekly FROM order_table, orderdetails,menu WHERE orderdetails.OrderNo=order_table.OrderNo AND menu.FoodID=orderdetails.FoodID AND order_table.Queue=0 AND order_table.time_stamp >= current_date - 7";
$qry2=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($qry2);
$weekly=$row['weekly'];

$qry="select sum(orderdetails.Quantity*menu.UnitPrice) as annual from order_table, orderdetails,menu where orderdetails.OrderNo=order_table.OrderNo and menu.FoodID=orderdetails.FoodID and order_table.Queue=0 and order_table.time_stamp >= current_date - 356";
$qry2=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($qry2);
$annual=$row['annual'];

$qry="select sum(orderdetails.Quantity*menu.UnitPrice) as points from order_table, orderdetails,menu where orderdetails.OrderNo=order_table.OrderNo and menu.FoodID=orderdetails.FoodID and order_table.Queue=4 ";
$qry2=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($qry2);
$points=$row['points'];

$qry="select distinct(FoodID) as fid,sum(Quantity) as sqty from orderdetails group by FoodID order by sqty desc";
$qry2=mysqli_query($conn,$qry);
$ctr=0;
while($row=mysqli_fetch_array($qry2)){
	$bsname[$ctr]=$row['fid'];
	$bscount[$ctr]=$row['sqty'];
	$ctr++;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <!-- Local Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">  
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="css/style6.css">
      
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Reports</title>
</head>
<body>
    <div class="container-fluid main-container">
        
        <div class="title-header">
            <div class="navbar-container">
                <a href="index.php"><div class="logo"></div></a>
                <li>
                    <ul><a href="index.php">HOME</a></ul>
                    <ul><a href="menu.php">MENU</a></ul>
                    <ul><a href="about.php">ABOUT</a></ul>
                    <ul><a href="forum.php">FORUM</a></ul>
                    <ul><a href="#tocontact">CONTACT</a></ul>
                    <?php checklogInOutButton(); ?>
                </li>
                <div class="hamburger"></div>
                
                <!-- For the Hamburger -->
                <div class="hamburger-container">
                    <div class="hamburger-nav">
                        <label><a href="index.php">HOME</a></label>
                        <label><a href="menu.php">MENU</a></label>
                        <label><a href="about.php">ABOUT</a></label>
                        <label><a href="forum.php">FORUM</a></label>
                        <label><a href="#tocontact">CONTACT</a></label>
                        <?php mobileLogInOut(); ?>
                    </div>   
                    <div class="exit">
                        <img src="img/exit.png">
                    </div>
                </div>
            </div> <!-- End of navbar-container -->

            
            <div class="line-left">
                <img src="img/line-left.png">
            </div>
            <div class="line-right">
                <img src="img/line-right.png">
            </div>
            
        </div> <!-- End of title-header -->
        
        <div class="container col-sm-12 parent-second">
            <div class="col-sm-10 offset-sm-1 second-container">
                
                <div class="col-sm-12 report-container">  
                    <div class="report">
                        <label class="create">Makisushi <span>Reports</span></label>
                    </div>
                    <div class="col-lg-12 col-sm-12 sales-container">
                        <div class="col-lg-4 col-md-12 sales">
                            <h4>Daily Sales</h4>
                            <h3><?php echo $daily ?></h3>
                        </div>
                        <div class="col-lg-4 col-md-12 sales">
                            <h4>Weekly Sales</h4>
                            <h3><?php echo $weekly ?></h3>
                        </div>
                        <div class="col-lg-4 col-md-12 sales">
                            <h4>Anaual Sales</h4>
                            <h3><?php echo $annual ?></h3>
                        </div>
                        <div class="col-lg-4 col-md-12 sales">
                            <h4>Used Points</h4>
                            <h3><?php echo $points ?></h3>
                        </div>
                        <div class="col-lg-8 col-md-12 sales best">
                            <div>
                                <h4>Best Sellers</h4>
                            </div>
                            
                            <?php

                            for($ctr=0;$ctr<5;$ctr++){
                            echo "<div class='best-container'>";
                                echo "<div>";                                            
                                            echo $bsname[$ctr];
                                            echo "<br>";
                                echo "</div>";
                                echo "<div class='best-amount'>";
                                            echo "<label>Sold: &nbsp</label>";
                                            echo $bscount[$ctr];
                                echo "</div>";       
                            echo "</div>";
                            }?>
                            
                        </div>
                    </div> <!-- End of sales-container -->
                </div> <!-- End of report-container -->
                
            </div> <!-- End of second-container -->
        </div> <!-- End of parent-second -->
        
         <div class="container contact-parent">
            <div id="tocontact" class="col-lg-12 col-sm-12 contact">
                <label>Contact Us</label>
                <label>Email: makisushi@gmail.com</label>
                <label>Mobile #: 09174768492 (Globe)</label>
                <label class="location">Located at 160 Panay Ave Cor. Edsa Quezon City</label>
            </div>
        </div>
        
    </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Local Bootstrap Javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js.map"></script>

        <!--Personal Javascript -->
        <script src="js/script.js"></script>
</body>
</html>