<?php
require_once('chef.php');
?>
<?php
if(isset($_POST)){
        $cname=$_POST['cname'];
        $cemail=$_POST['cemail'];
        $cphone=$_POST['cphone'];
        $address=$_POST['address'];
        $country=$_POST['country'];
        $state=$_POST['state'];
        $type=$_POST['type'];
        $sql="INSERT INTO chef(cname,cemail,cphone,address,country,state,type) VALUES(?,?,?,?,?,?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$cname,$cemail,$cphone,$address,$country,$state,$type]);
}else{
    echo 'no data';
}
?>