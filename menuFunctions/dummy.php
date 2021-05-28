<?php


function showValueMeals(){
    require('config.php');

    //$qry = "SELECT FoodName FROM menu WHERE LENGTH(FoodID) < 4 AND FoodID LIKE 'VM%' OR LENGTH(FoodID) > 4 AND FoodID LIKE 'VM%'";
    $resultsPerPage=10;
    $qry = "SELECT FoodName,UnitPrice FROM menu WHERE FoodID LIKE 'VM%'";
    $res = mysqli_query($conn,$qry);
    $numberOfPages = ceil(mysqli_num_rows($res)/$resultsPerPage);
    $currentPage;

while($row = mysqli_fetch_array($res)):
    echo "<br/>";
    echo $numberOfPages;
    echo $row['FoodName'];
    echo " ", $row['UnitPrice'];
    echo "<br/>";
endwhile;

for($page=1;$page< 5;$page++){
    ?>
        <a href="menu.php?page=<?php echo $page ?>"><?php echo $page ?></a>
    <?php
}


}