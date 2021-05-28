<?php
function logInCheck(){
    if(!empty($_SESSION['uname'])){
?>
        <script>alert("Welcome <?php echo $_SESSION['uname']?>");</script>
<?php
        header("refresh:0;url=home.php");
    }
    else{
        ?>
        <script>alert("Wrong username or password!");</script>
        <?php
        header("refresh:0;url=login.html");
    }
}
/*********************************************************************************************************/

//TODO: 10/26/18
function checklogInOutButton(){
    if(empty($_SESSION['uname'])){
        ?> 
        <ul><a href="login.html" id="login">LOGIN</a></ul>
        <?php
    }
    else{
        ?> 
        <ul><a href="logout.php" id="login">LOGOUT</a></ul>
        <?php  
    }
}
//TODO: 10/26/18
function verifyLoggedUname(){
    require('values.php');
    if(!empty($_SESSION['uname'])){
        if($_SESSION['uname']=="admin"){
            echo "ADMINISTRATOR";
        }
        else{
            echo $_SESSION['uname'],": ",$merit," points";
        }
    }
    else{
        echo 'JAPANESE RESTAURANT';
    }
}
//TODO: 10/26/18
function mobileLogInOut(){
    if(!empty($_SESSION['uname'])){
    ?>
        <label><a href="logout.php">LOGOUT</a></label>
    <?php
    }
    else{
    ?>
        <label><a href="login.html">LOGIN</a></label>
    <?php
    }
}
//TODO: 10/26/18
function mobileLogInOut2(){
    if(!empty($_SESSION['uname'])){
    ?>
        <ul><a href="logout.php">LOGOUT</a></ul>
    <?php
    }
    else{
    ?>
        <ul><a href="login.html">LOGIN</a></ul>
    <?php
    }
}
//TODO: 10/26/18
function reportButtonHamburger2(){
if(!empty($_SESSION['uname'])){
    if($_SESSION['uname'] == "admin"){
        ?>
        <ul><a href="dashboard.php">REPORT</a></ul>
        <?php
    }
}
}
//TODO: 10/26/18
function adminlogin(){
    require('config.php');
$uname = mysqli_real_escape_string($conn,$_POST['uname']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
//checks if username exist
if($uname == "admin"){
    $qry1 = "SELECT * FROM custinfo WHERE uname = 'admin'";
    $res1 = mysqli_query($conn,$qry1);

    while($row = mysqli_fetch_assoc($res1)):
        $ver = password_verify($pass, $row['password']);
        if($ver){
            $_SESSION['uname'] = $row['uname'];
            header("refresh:0;index.php");
        }
        else{
            ?>
            <script>alert("Wrong password!");</script>
            <?php
            mysqli_close($conn);
            header("refresh:0; url = admin.php");
        }
    endwhile;
}
else{
    header("refresh:0;url = admin.php");
}

}
//TODO: 10-30-18
function addMenu(){
    require('config.php');
$fid = $_POST['FID'];
$foodName = $_POST['FoodName'];
$uPrice = $_POST['uPrice'];

$qry = "INSERT INTO menu(FoodID,FoodName,UnitPrice) VALUES('$fid','$foodName',$uPrice)";
mysqli_query($conn,$qry);
}
//TODO: 10-30-18
function search(){
require('config.php');

if(isset($_POST['search'])){
$valSearch = $_POST['valSearch'];
$qry = "SELECT * FROM menu WHERE CONCAT(FoodID,FoodName) LIKE '%$valSearch%'";
$res = mysqli_query($conn,$qry);

if(mysqli_num_rows($res) <=0){
echo "No results found :(";
}
else{
while($row = mysqli_fetch_assoc($res)):
?>  
<form  action="" method="POST">
    <div class="form-row form-line">
        <div class="form-group col-sm-4">
            <input type="text" class="form-control" name="fid" id="" value="<?php echo $row['FoodID'];?>" readonly>
        </div>
        <div class="form-group col-sm-4">                
            <input type="text" class="form-control" name="foodName" id="" value="<?php echo $row['FoodName'];?>">
        </div>
        <div class="form-group col-sm-4">                
            <input type="text" class="form-control" name="uPrice" id="" value="<?php echo $row['UnitPrice'];?>">
        </div>
        <button type="submit" name="update" value="UPDATE" class="formbut btn bg-success text-white btn-lg">Update</button>
        <button type="submit" name="deleteFID" value="DELETE" class="formbut btn bg-danger text-white btn-lg">Delete</button>
    </div>   
</form> 
<?php
endwhile;
}
}
}
//TODO: 10-30-18
function update(){
require('config.php');
$fid=$_POST['fid'];
$foodName = $_POST['foodName'];
$uPrice = $_POST['uPrice'];
$qry = "UPDATE menu SET FoodName = '$foodName',UnitPrice=$uPrice WHERE FoodID = '$fid'";
mysqli_query($conn,$qry);
}
//TODO: 10-31-18
function deleteFID(){
require('config.php');
$fid=$_POST['fid'];
$qry = "DELETE FROM menu WHERE FoodID = '$fid'";
mysqli_query($conn,$qry);
}
//TODO: 10-31-18
function checkAdmin(){
    if($_SESSION['uname']!='admin' || empty($_SESSION['uname'])){
        header("refresh:0 ; url=index.php");
    }
}
//TODO: 10-31-18
function regWaiter(){
require('config.php');
$wname = mysqli_real_escape_string($conn,$_POST['wname']);
//$pass = mysqli_real_escape_string($conn,$_POST['wpass']);
$pass = password_hash($pass,PASSWORD_DEFAULT,['cost'=>12]);


$qry = "INSERT INTO waiter(wname,wpass) VALUES('$wname','$pass')";
mysqli_query($conn,$qry);
}

function reportButton(){
    if(!empty($_SESSION['uname'])){
        if($_SESSION['uname'] == "admin"){
            ?>
            <ul><a href="dashboard.php">REPORT</a></ul>
            <?php
        }
    }
}

function reportButtonHamburger(){
if(!empty($_SESSION['uname'])){
    if($_SESSION['uname'] == "admin"){
        ?>
        <label><a href="dashboard.php">REPORT</a></label>
        <?php
    }
}
}

function altermenu(){
    if(!empty($_SESSION['uname'])){
        if($_SESSION['uname'] == "admin"){
            ?>
            <label><a href="alterMenu.php">Edit the Menu</a></label>
            <?php
        }
    }
}

function customerFeedBack(){
    require('config.php');
    $qry = "SELECT * FROM misc ORDER BY time_stamp DESC";
    $res = mysqli_query($conn,$qry);

    while($row = mysqli_fetch_assoc($res)):
        ?>
<!-- <form class="col-sm-12" method="POST" action="del.php"> -->
    <div class="input-group col-sm-10 comment-all">
        <div class="col-sm-12">
            <div class="input-group-prepend">
                <span class="input-group-text user"><?php echo $row['uname'];?></span>
                <?php //if($_SESSION['uname'] == $row['uname']){ ?>
               <!-- <input class="btn btn-danger btn-sm" type="submit" value="DELETE"> -->
                <?php //$time_stamp = $row['time_stamp'];
                ?>
            </div>
            <textarea class="form-control areatext" name="feedBack" aria-label="With textarea" placeholder="<?php echo $row['FeedBack']; ?> "readonly></textarea>
        </div>
        <div class="col-sm-10">
            <small id="emailHelp" class="form-text text-muted"><?php echo $row['time_stamp'];?></small>
        </div>
    </div>
<!-- </form> -->
        <?php
    endwhile;
   
}
?>