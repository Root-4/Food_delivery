<?php
session_start();
if(isset($_SESSION['userlogin'])){
    header("Location:index.php");
}
require_once('log.php');
readfile('login.html');
?>