<?php
if(!empty($_SESSION['uname'])){
    require('config.php');
    $uname = $_SESSION['uname'];
    $qry = "SELECT merit FROM custinfo WHERE uname = '$uname'";
    $res = mysqli_query($conn, $qry);
    while($row = mysqli_fetch_assoc($res)):
        $merit = $row['merit'];
    endwhile;
}
?>