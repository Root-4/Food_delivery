<?php
session_start();
require_once('log.php');
$uname=$_POST['uname'];
$password=sha1($_POST['password']);
$sql="SELECT * FROM user WHERE uname= ? AND password= ? LIMIT 1";
$stmtselect=$db->prepare($sql);
$result=$stmtselect->execute([$uname,$password]);
// echo $result;
// $a=$stmtselect->rowCount();
if($result){
    $user=$stmtselect->fetchAll(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount()>0){
        $_SESSION['userlogin']=$user;
        echo '1';
    }
    else{
        echo 'There is no user';
    }
}else{
    echo '0';
}
?>