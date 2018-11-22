<?php 
    include('dbcon.php');
    $t_id=$_COOKIE['tea_id'];
    $w_id=$_GET['w_id'];
    $q_title=$_POST['q_title'];
    $s_A=$_POST['s_A'];
    $s_B=$_POST['s_B'];
    $s_C=$_POST['s_C'];
    $s_D=$_POST['s_D'];
    $A_score=$_POST['A_score'];
    $B_score=$_POST['B_score'];
    $C_score=$_POST['C_score'];
    $D_score=$_POST['D_score'];
    $re="insert into wenti (q_title,w_id,s_A,A_score,s_B,B_score,s_C,C_score,s_D,D_score,t_id) values('$q_title','$w_id','$s_A','$A_score','$s_B','$B_score','$s_C','$C_score','$s_D','$D_score','$t_id')";
    mysql_query($re);
    echo'<script> window.location.href="../wenjuan/tea_wenjuan.php?w_id=';
    echo $w_id;
    echo'"</script>';
?>