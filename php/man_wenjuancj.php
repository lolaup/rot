<?php
   include('dbcon.php');
   $w_id=date('h-i-sa');
   $wj_title=$_POST['wj_title'];
   $st=$_POST['st'];
   $ft=$_POST['ft'];
   $ree="select t_id,c_id from course";
   $query2=mysql_query($ree);
   while($value=mysql_fetch_array($query2))
   {
    $t_id=$value['t_id'];
    $c_id=$value['c_id'];
    $re="insert into wenjuan (w_id,w_title,day_creat,day_finish,t_id,c_id)values('$w_id','$wj_title','$st','$ft','$t_id','$c_id')";
    mysql_query($re);
   }
   echo'<script> window.location.href="../man_gg.php"</script>';
?>