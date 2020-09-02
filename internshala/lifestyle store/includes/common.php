<?php
$con=mysqli_connect("localhost","root","","store","3308") or die(mysqli_connect_error($con));
if(!isset($_SESSION['email'])){
    session_start();
}
?>
