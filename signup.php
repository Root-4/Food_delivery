<?php
session_start();
if(isset($_SESSION['userlogin'])){
    header("Location:index.php");
}
require_once('add.php');
readfile('signup.html');
?>

