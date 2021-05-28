<?php
session_start();
require('config.php');
require('functions.php');
require('menuFunctions/menuDetails.php');
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
    <link rel="stylesheet" type="text/css" href="css/style5.css">
      
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Menu Makisushi</title>
  </head>
  <body>
    <div class="container-fluid main-container">
        
        <div class="title-header">
            <div class="navbar-container">
                <a href="index.php"><div class="logo"></div></a>
                <li>
                    <ul><a href="index.php">HOME</a></ul>
                    <ul><a href="about.php">ABOUT</a></ul>
                    <ul><a href="forum.php">FORUM</a></ul>
                    <ul><a href="#tocontact">CONTACT</a></ul>
                    <?php reportButton(); ?>
                    <?php checklogInOutButton(); ?>
                </li>
                <div class="hamburger"></div>
				
				<!-- For the Hamburger -->
                <div class="hamburger-container">
                    <div class="hamburger-nav">
                        <label><a href="index.php">HOME</a></label>
                        <label><a href="about.php">ABOUT</a></label>
                        <label><a href="forum.php">FORUM</a></label>
                        <label><a href="#tocontact">CONTACT</a></label>
                        <?php reportButtonHamburger(); ?>
                        <?php mobileLogInOut();?>
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
            <div class="col-xs-10 col-sm-10 offset-sm-1 offset-xs-1 second-container">
				<div class="col-sm-10 title-menu">
					<label class="create">Makisushi <span>Menu</span></label>
                    <label>Get the Japanese Feeling by tasting our delicious food</label>
                    
                    <?php altermenu(); ?>
                    
				</div>
                <!--START: VALUE MEAL-->
                <div class="col-sm-10 category-parent">
                    <div class="category">
                        Value Meal
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent">
                        <?php showByCategoryMeals('VM'); ?>
                    </div>
                </div>
                <!--END: VALUE MEAL-->

                <!--START: SPECIAL VALUE MEAL-->
                <div class="col-sm-10 category-parent">
                    <div class="category1">
                        Special Value Meals
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent1">
                        <?php showByCategoryMeals('SVM'); ?>
                    </div>
                </div>
                <!--END: SPECIAL VALUE MEALS-->

                <!--START: ALL TIME FAVORITES-->
                <div class="col-sm-10 category-parent">
                    <div class="category2">
                        All Time Favorites
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent2">
                        <?php showByCategoryMeals('ATF'); ?>
                    </div>
                </div>
                <!--END: ALL TIME FAVORITES-->

                <!--START: RAMEN NOODLES-->
                <div class="col-sm-10 category-parent">
                    <div class="category3">
                        Ramen Noodles
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent3">
                        <?php showByCategoryMeals('RN'); ?>
                    </div>
                </div>
                <!--END: RAMEN NOODLES-->

                <!--START: SNACK MEALS-->
                <div class="col-sm-10 category-parent">
                    <div class="category4">
                        Snack Meals
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent4">
                        <?php showByCategoryMeals('SM'); ?>
                    </div>
                </div>
                <!--END: SNACK MEALS-->

                <!--START: HOUSE COMBINATIONS-->
                <div class="col-sm-10 category-parent">
                    <div class="category5">
                        House Combination
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent5">
                        <?php showByCategoryMeals('HC'); ?>
                    </div>
                </div>
                <!--END: HOUSE COMBINATIONS-->

                <!--START: HOUSE SPECIALTY-->
                <div class="col-sm-10 category-parent">
                    <div class="category6">
                        House Specialty
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent6">
                        <?php showByCategoryMeals('HS'); ?>
                    </div>
                </div>
                <!--END: HOUSE SPECIALTY-->

                <!--START: DRINKS-->
                <div class="col-sm-10 category-parent">
                    <div class="category7">
                        Drinks
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent7">
                        <?php showByCategoryMeals('D'); ?>
                    </div>
                </div>
                <!--END: DRINKS-->

                <!--START: SHAKE-->
                <div class="col-sm-10 category-parent">
                    <div class="category8">
                        Shakes
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent8">
                        <?php showByCategoryMeals('S'); ?>
                    </div>
                </div>
                <!--END: SHAKE-->

                <!--START: MAKI ROLLS-->
                <div class="col-sm-10 category-parent">
                    <div class="category9">
                        Maki Rolls
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent9">
                        <?php showByCategoryMeals('MRS'); ?>
                    </div>
                </div>
                <!--END: MAKI ROLLS-->

                <!--START: SUSHI-->
                <div class="col-sm-10 category-parent">
                    <div class="category10">
                        Sushi
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent10">
                        <?php showByCategoryMeals('SH'); ?>
                    </div>
                </div>
                <!--END: SUSHI-->

                <!--START: DESSERTS-->
                <div class="col-sm-10 category-parent">
                    <div class="category11">
                        Desserts
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent11">
                        <?php showByCategoryMeals('DS'); ?>
                    </div>
                </div>
                <!--END: Desserts-->

                <!--START: SALADS-->
                <div class="col-sm-10 category-parent">
                    <div class="category12">
                        Salads
                        <img src="img/down.png" width=20px height=20px>
                    </div>
                    <!--TO EDIT THE MENUS BELOW THIS COMMENT GO TO menuFunctions folder THEN OPEN menuDetails.php-->
                    <div class="menu-parent12">
                        <?php showByCategoryMeals('SL'); ?>
                    </div>
                </div>
                <!--END: SALADS-->
                
                <label class="pahabol">Taste one now by eating at Makisushi Japanese Restaurant <span>!</span></label>
			</div> <!-- END of second-container -->
		</div> <!-- END of parent-container -->
		
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