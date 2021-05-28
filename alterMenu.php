<?php
session_start();
require('config.php');
require('functions.php');

checkAdmin();

if(isset($_POST['update'])){
    update();
}
else if(isset($_POST['deleteFID'])){
    deleteFID();
}

if(isset($_POST['add'])){
    addmenu();
}
?>

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
        <link rel="stylesheet" type="text/css" href="css/style7.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <title>Menu Administrator</title>
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
                        <label><a href="about.php">ABOUT US</a></label>
                        <label><a href="forum.php">FORUM</a></label>
                        <?php reportButtonHamburger(); ?>
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
                
                <div class="create">Administrator <span>Menu</span></div>
                
                <div class="back"><a href="menu.php">Back to Menu</a></div>
                
                <form class="form" action="" method="POST">
                    <div class="add"><h3>Add a New Menu</h3></div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" name="FID" placeholder="FoodID" class="form-control form-control-lg">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" name="FoodName" placeholder="FoodName" class="form-control form-control-lg">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="numbers" name="uPrice" placeholder="Unit Price" class="form-control form-control-lg">
                        </div>
                    </div>
                    <button type="submit" name="add" value="ADD" class="btn bg-dark text-white btn-lg">Add</button>
                </form>
                
                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <div class="add"><h3>Search for a Menu</h3></div>
                        <input type="text" name="valSearch" class="form-control form-control-lg" placeholder="Search..">
                        <small id="emailHelp" class="form-text text-muted">Type the Menu that you want to Update or Delete</small>
                    </div>
                    <button type="submit" name="search" value="SEARCH" class="btn bg-dark text-white btn-lg">Search</button>
                </form>
                
                <form  action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-sm-4 col-lg-4">
                            <h5>ID</h5>
                        </div>
                        <div class="form-group col-sm-4 col-lg-4">                
                            <h5>Food Name</h5>
                        </div>
                        <div class="form-group col-sm-4 col-lg-4">                
                            <h5>Unit Price</h5>
                        </div>
                    </div>
                    <?php if(isset($_POST['search'])){
                        search();
                    }?>   
                </form>
               
                
            </div> <!-- End of second-container -->
        </div> <!-- End of parent-second -->
        
         <div class="container contact-parent">
            <div class="col-lg-12 col-sm-12 contact">
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
