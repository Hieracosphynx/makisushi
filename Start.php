<?php
require('config.php');
//$conn=mysqli_connect("localhost","root","","makisushi");
session_start();
$name=$_SESSION['name'];
$tnum=$_SESSION['tnum'];
$ctr=$_SESSION['ctr'];
if($ctr==''){
    $temp='func.php';
}
else{
    $temp='func2.php';
}
?>



<html lang='en'>
    <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

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
        <link rel="stylesheet" type="text/css" href="css/style-makisushi2.css">
            
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <title>Waiter (Makisushi)</title>
    </head>
    
    <body>

        <div class='container-fluid main-container'>
            <div class='container col-sm-12 parent-second'>
                <div class='col-sm-10 offset-sm-1 second-container1'>     
                    <div class='holder'>
                        <div class='waiter'>
                            <h3>Order of</h3>
                            <h1><?php echo $name ?></h1>
                        </div>

                    
                        <!-- check if ordering or redeem -->
                        <?php
                        if($_SESSION['rew']==1){
                            echo "<label class='points'>POINTS:";
                            echo $_SESSION['mer'];
                            echo "</label>";
                        }
                        /* review button */
                        if($ctr!=''){
                        echo "<a href='func3.php'><button class='review col-sm-12 btn btn-md btn-success' type='button'>Review</button></a><br>";
                        }
                        ?>


                        <form method='POST' action='<?php echo $temp ?>'>
                            <div class='form-group tablenum'>
                                <h6>Table No.</h6>
                                <input class='form-control' type='text' name='tnum' value='<?php echo $tnum ?>'>
                            </div>

                            <div> <!-- jodie eto ung quantity dapat kitang kita to.--> 
                                <div class="quantity form-group">
                                    <label>Quantity</label>
                                    <input class='form-control' type='number' name='qty' value='1'>
                                </div>
                                 
                            </div>
                            
                            <table>
                                
                                <!--START: VALUE MEAL-->
                                <div class="category-parent">
                                    <div class="category">
                                        Value Meal
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
                                        
                                        $query="select * from Menu where FoodID like '%VM%' and FoodID not like '%SVM%' order by length(FoodID),FoodID";
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                </div>
                                <!--END: VALUE MEAL-->

                                <!--START: SPECIAL VALUE MEAL-->
                                <div class="category-parent1">
                                    <div class="category1">
                                        Special Value Meal
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
                                        
                                        $query="select * from Menu where FoodID like '%SVM%' order by length(FoodID),FoodID";
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js1'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: SPECIAL VALUE MEAL-->
                                
                                <!--START: ALL TIME FAVORITE-->
                                <div class="category-parent2">
                                    <div class="category2">
                                        All Time Favorite
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
                                        
                                        $query="select * from Menu where FoodID like '%ATF%' order by length(FoodID),FoodID";
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js2'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: ALL TIME FAVORITE-->

                                <!--START: RAMEN NOODLES-->
                                <div class="category-parent3">
                                    <div class="category3">
                                        Ramen Noodles
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
                                        
                                        $query="select * from Menu where FoodID like '%RN%' order by length(FoodID),FoodID";
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js3'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: RAMEN NOODLES-->

                                <!--START: SNACK MEALS-->
                                <div class="category-parent4">
                                    <div class="category4">
                                        Snack Meals
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%SM%'";                                    
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js4'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: SNACK MEALS-->

                                <!--START: HOUSE COMBINATIONS-->
                                <div class="category-parent5">
                                    <div class="category5">
                                        House Combinations
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%HC%' order by length(FoodID),FoodID";                                   
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js5'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: HOUSE COMBINATIONS-->

                                <!--START: HOUSE SPECIALTY-->
                                <div class="category-parent6">
                                    <div class="category6">
                                        House Specialty
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%HS%' order by length(FoodID),FoodID";                                   
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js6'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: HOUSE SPECIALTY-->

                                <!--START: DRINKS-->
                                <div class="category-parent7">
                                    <div class="category7">
                                        Drinks
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%D%' and FoodID not like '%DS%' order by length(FoodID),FoodID";                                
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js7'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: DRINKS-->

                                <!--START: SHAKES-->
                                <div class="category-parent8">
                                    <div class="category8">
                                        Shakes
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like 'S%' and FoodID not like '%SVM%' and FoodID not like '%SH%' order by length(FoodID),FoodID";                                
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js8'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: SHAKES-->

                                <!--START: MAKI-ROLLS-->
                                <div class="category-parent9">
                                    <div class="category9">
                                        Maki-Rolls
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%MR%' order by length(FoodID),FoodID";                                
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js9'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: MAKI-ROLLS-->

                                <!--START: SUSHI-->
                                <div class="category-parent10">
                                    <div class="category10">
                                        Sushi
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%SH%' order by length(FoodID),FoodID";                                
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js10'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: SUSHI-->

                                <!--START: DESERT-->
                                <div class="category-parent11">
                                    <div class="category11">
                                        Desert
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%DS%' order by length(FoodID),FoodID";                                
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js11'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: DESERT-->

                                <!--START: SALAD-->
                                <div class="category-parent12">
                                    <div class="category12">
                                        Salad
                                        <img src="img/down.png" width=20px height=20px>
                                    </div>
                                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                                    <?php
                                    echo "<div>";
 
                                        $query="select * from Menu where FoodID like '%SL%'AND FoodID NOT LIKE 'H%' order by length(FoodID),FoodID";                                
                                        $query2=mysqli_query($conn,$query);

                                        while ($row=mysqli_fetch_array($query2)){
                                        $code=$row['FoodID'];

                                        echo "<div class='tr-js12'>";
                                        echo    "<div class='td-flex'>";
                                        echo        $row['FoodName'];
                                        echo    "</div>";      
                                        echo    "<div class='td-flex'>";                   
                                        echo        "<input class='btn btn-success' type='submit' value='$code' name='Order'>";
                                        echo    "</div>";      
                                        echo "</div>";

                                        }
                                        
                                    echo "<div>";
                                    ?>
                                    
                                </div>
                                <!--END: SALAD-->
                                
                            </table>
                        </form>

                                    
                    </div> <!-- End of holder -->
                </div> <!-- End of second-container -->
            </div> <!-- End of parent-second -->
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