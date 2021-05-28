<?php
session_start();
require('config.php');
require('functions.php');

$uname = mysqli_real_escape_string($conn,$_POST['uname']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
//checks if username exist
$qry = "SELECT uname FROM custinfo WHERE '$uname' = uname";
$res = mysqli_query($conn,$qry);

if($uname == "admin"){
    ?>
    <script>alert("Wrong username or password!");</script>
    <?php
    header("refresh:0;url = login.html");
}
else{
    if(mysqli_fetch_array($res) > 0){
        $qry1 = "SELECT * FROM custinfo WHERE '$uname' = uname";
        $res1 = mysqli_query($conn,$qry1);

        while($row = mysqli_fetch_assoc($res1)):
            $ver = password_verify($pass, $row['password']);
            echo $ver;
            if($ver){
                $_SESSION['uname'] = $row['uname'];
                header("refresh:0;index.php");
                //FIXME: logInCheck();
            }else{
                logInCheck();
                mysqli_close($conn);
            }
        endwhile;
    }
    else{
        logInCheck();
        mysqli_close($conn);
    }
}
?>