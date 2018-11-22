<?php
  include('dbcon.php');
  $q_id=$_GET['q_id'];
  $w_id=$_GET['w_id'];
  $re="delete from man_wenti where q_id=$q_id";
  mysql_query($re);
  echo'<script> window.location.href="../wenjuan/man_wenticj.php?w_id=';
  echo $w_id;
  echo'"</script>';
?>