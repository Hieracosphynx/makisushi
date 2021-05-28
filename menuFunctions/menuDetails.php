<?php


function showByCategoryMeals($term){
    require('config.php');
    
        $qry = "SELECT * FROM menu WHERE FoodID LIKE '$term%'";
        $res = mysqli_query($conn,$qry);

    while($row = mysqli_fetch_assoc($res)):
    ?>

        <div class="menu-items">
            <label>
                <?php echo $row['FoodName'];?>
            </label>
            <label>
                <?php echo $row['UnitPrice'];?>
            </label>
        </div>
        
    <?php
    endwhile;

}
//NEED IMPROVEMENT
function showBeverages($drinks){
    require('config.php');
    if($drinks == 'D'){
    $qry="SELECT * FROM menu WHERE FoodID LIKE '%$drinks%' AND FoodID NOT LIKE 'DS%'";
    }
    else if($drinks == 'S'){
        $qry="SELECT * FROM menu WHERE FoodID LIKE '$drinks%' AND FoodID NOT LIKE 'SH%' AND FoodID NOT LIKE 'SVM%' AND FoodID NOT LIKE '%SL%' AND FoodID NOT LIKE 'SS%' AND FoodID NOT LIKE 'SMV%' AND FoodID NOT LIKE 'SLS%' AND FoodID NOT LIKE 'SM%'";
    }
    else if($drinks=='MRS'){
        $qry="SELECT* FROM menu WHERE FoodID LIKE 'MRS%'";
    }
    $res = mysqli_query($conn,$qry);

    while($row = mysqli_fetch_assoc($res)):
    ?>
        <label>
            <?php echo $row['FoodName'];?>
        </label><br/>
        <label>
            <?php echo $row['UnitPrice'];?>
        </label><br/>
    <?php
    endwhile;
}


?>