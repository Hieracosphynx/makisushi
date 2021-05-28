<?php
require('config.php');
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$passw = password_hash($pass,PASSWORD_DEFAULT,["cost"=>12]);
//$uname = stripslashes($uname);

$qry = "SELECT * FROM custinfo WHERE '$uname' = uname ";
$res = mysqli_query($conn, $qry);


if(mysqli_fetch_array($res) <= 0){
  // echo "sdsdsds";
    $qry1 = "INSERT INTO custinfo VALUES('$uname','$passw',0)";
    mysqli_query($conn,$qry1);
    ?>
<script>alert("Success!");</script>
<?php
    header("refresh:0;url=login.html");
    mysqli_close($conn);
}

else{
?>
<script>alert("Username already exist");</script>
<?php
header('refresh:0;url = "signup.html"');
mysqli_close($conn);
}

?>