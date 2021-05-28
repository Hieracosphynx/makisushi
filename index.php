<?php
session_start();
require('config.php');
require('values.php');
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
      
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Makisushi</title>
  </head>
  <body>
    <div class="container-fluid main-container">
        
        <div class="title-header">
            <div class="navbar-container">
                <a href="index.php"><div class="logo"></div></a>
                <li>
                    <ul><a href="menu.php">MENU</a></ul>
                    <ul><a href="about.php">ABOUT</a></ul>
                    <ul><a href="forum.php">FORUM</a></ul>
                    <ul><a href="#tocontact">CONTACT</a></ul>
                    <?php reportButton(); ?>
                    <!--CHANGES 10/26/18-->
                    <?php checklogInOutButton() ?>
                </li>
                <div class="hamburger"></div>
                
                <!-- For the Hamburger -->
                <div class="hamburger-container">
                    <div class="hamburger-nav">
                        <label><a href="menu.php">MENU</a></label>
                        <label><a href="about.php">ABOUT US</a></label>
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
            <div class="title">
                <img class="img-fluid logo-title" id="imgtitle" src="img/logotitle.png">
                <!--<label id="makititle">makisushi</label>-->
                <!--<label>GET THE JAPANESE FEELING</label>-->
            </div>
            <div class="lantern1">
                <img src="img/lantern1.png">
            </div>
            <div class="lantern2">
                <img src="img/lantern2.png">
            </div>
            
            <div class="lantern3">
                <img src="img/lantern3.png">
            </div>
            <div class="lantern4">
                <img src="img/lantern4.png">
            </div>
            
            <div class="line-left">
                <img src="img/line-left.png">
            </div>
            <div class="line-right">
                <img src="img/line-right.png">
            </div>
            
        </div> <!-- End of title-header -->
        
        <div class="container col-sm-12 parent-second">
            <div class="col-sm-10 offset-sm-1 second-container">
                
                <div class="logomak marg-top"></div>
                <!--CHANGED 10/26/18-->
                <label id="jap-resto-id" class="jap-resto"><?php verifyLoggedUname(); ?></label>
                <label class="marg about1">Makisushi is a Japanese Restaurant that has a unique vibe and an aesthetic ambience inside. Makisushi embraces everyone and shares the love for Japanese food to the community. Makisushi Started a humble beginning on the year 2007. Before it has only 6-7 tables and can only accomodate 12-15 customers, and only has 5 staffs, the menu was also small.. <br><a href="about.php">Read more about Makisushi.</a>
                </label>
                <label class="marg about2">
                <span>"</span> Persistence and Consistency of Quality Serving and Food is what keeps us goaing after even after a decade and more! <span>"</span>
                </label>
        
                <img class="arrow" src="img/arrow.png">
                
                
                <label class="menu">
                    <img src="img/menu.png">
                </label>
                
                <div class="container-fluid menubox">
                    <div class="menu1">
                        <div class="col-lg-6 col-md-12 col-sm-12 left-col">
                            <div class="box1 kiki"></div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 right-col">
                            <div class="right-up kiki">

                            </div>
                            <div class="right-down kiki">

                            </div>
                        </div>
                    </div> <!-- End of menu1 -->
                    
                    <div class="menu1">
                        <div class="col-lg-6 col-md-12 col-sm-12 right-col">
                            <div id="rnoodles" class="right-up kiki">

                            </div>
                            <div id="smeals" class="right-down kiki">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 left-col">
                            <div id="makirolls" class="box1 kiki"></div>
                        </div>
                    </div> <!-- End of menu1 -->
                </div> <!-- End of menubox -->
                
                <div class="container-fluid">
                    <div class="col-lg-12 col-sm-12 more">
                        <label><a href="menu.php">MORE..</a></label>
                    </div>
                </div>
                
            </div> <!-- End of secon-container -->
        </div> <!-- End of parent-second -->
        
        <div class="line-leftv2">
            <img src="img/line-leftv2.png">
        </div>
        
        <div class="line-rightv2">
            <img src="img/line-rightv2.png">
        </div>
        
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