<?php
 $db_user='root';
 $db_pass='';
 $db_name='login';

 $db=new PDO('mysql:host=localhost;port=3307;dbname='.$db_name.';charset=utf8',$db_user,$db_pass);
 $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>