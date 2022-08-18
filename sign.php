<?php
require_once('add.php');
?>
<?php
if(isset($_POST)){
        $uname=$_POST['uname'];
        // $secondname=$_POST['secondname'];
        $email=$_POST['email'];
        $password=sha1($_POST['password']);
        $sql="INSERT INTO user(uname,email,password) VALUES(?,?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$uname,$email,$password]);
        $_SESSION['userlogin']=$user;
    }else{
        echo 'no data';
    }
?>