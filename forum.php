<?php
session_start();
require('config.php');
require('functions.php');

  //  SessionExpired();

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
    <link rel="stylesheet" type="text/css" href="css/style3.css">
      
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Forum Makisushi</title>
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
                    <ul><a href="#tocontact">CONTACT</a></ul>
                    <?php reportButton(); ?>
                    <!--CHANGES 10/26/18-->
                    <?php checklogInOutButton(); ?>
                </li>
                <div class="hamburger"></div>
                
                <!-- For the Hamburger -->
                <div class="hamburger-container">
                    <div class="hamburger-nav">
                        <ul><a href="index.php">HOME</a></ul>
                        <ul><a href="menu.php">MENU</a></ul>
                        <ul><a href="about.php">ABOUT</a></ul>
                        <ul><a href="#tocontact">CONTACT</a></ul>
                        <?php reportButtonHamburger2(); ?>
                        <?php mobileLogInOut2(); ?>
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
                
            <div class="comment">
                <label class="create">Makisushi <span>Forum</span></label>
                <label class="whatdo">What do you think of us?</label>
            </div>
                
            <!-- Comments of Makisushi WITH ACCOUNTS ONLY -->        
            <?php 
                customerFeedBack(); 
            ?>
            <!-- POST YOUR COMMENTS HERE -->
            <?php
            /*
            * THIS MAKE SURE THAT ONLY VISITORS
            * WITH AN ACCOUNT AND ARE LOGGED IN CAN COMMENT A FEEDBACK.
            */
            if(!empty($_SESSION['uname'])){
            ?>
            <form action = "addfeed.php" method="POST" class="col-sm-8">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comments:</label>
                    <textarea class="form-control" name="feed" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
            <?php
            }
            ?>
            <label class="comment">You must first log-in, to be able to post a comment.</label>
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