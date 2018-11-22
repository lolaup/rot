<?php
include('dbcon.php');
    $w_id=$_GET['w_id'];
    $re="delete from wenjuan where w_id='$w_id'";
    mysql_query($re);
    echo'<script> window.location.href="../man_gg.php"</script>';
?>