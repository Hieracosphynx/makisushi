<?php 
session_start();
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
    <link rel="stylesheet" type="text/css" href="css/style-makisushi2.css">
      
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Waiter (Makisushi)</title>
  </head>
  <body>
    <div class="container-fluid main-container">
        
        <div class="container col-sm-12 parent-second">
            <div class="col-sm-10 offset-sm-1 second-container">
                
                <div class="logomak"></div>
                
                <div class="waitername">
                    <label>
                    <?php
                        echo $_SESSION['wname'];
                    ?>
                    <!-- LAGAY DITO WAITER NAME -->
                    </label>
                </div>
                
                <form class="col-sm-8" method="POST" action="validation.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="customer" placeholder="Enter Username..">
                        <small class="text-muted">Customer's Username</small>
                    </div>            
                    <center><button type="submit" name="submit" class="col-sm-8 btn btn-primary btn-lg">Enter</button></center>
                </form>
                
                <center class="col-sm-12">
                <div class="other-buttons">
                    <form class="other-forms col-sm-8" method='POST' action='redeem.html'>
                        <input class="col-sm-8 btn btn-success btn-md" type='submit' value='Redeem Reward'>
                    </form>
                    
                    <form class="other-forms col-sm-8" method='POST' action='logout-m2.php'>
                        <input class="col-sm-8 btn btn-dark btn-md" type='submit' value='Waiter Logout'>
                    </form>
                </div>                
                </center>
                
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