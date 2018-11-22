<?php 
$sum=$_POST['sum'];
$c_id=$_GET['c_id'];
$s_id=$_COOKIE['stu_id'];
include('dbcon.php');
$re="update xsrotb set score='$sum' where s_id='$s_id' and c_id='$c_id'";
mysql_query($re);
?>