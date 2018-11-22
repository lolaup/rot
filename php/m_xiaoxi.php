<?php
    include('dbcon.php');
    $lb=$_POST['que'];
    $x_title=$_POST['title'];
    $x_con=$_POST['neirong'];
    if(empty($title)&empty($x_con))
    {
       echo"<script>window.location.href='../wenjuan/m_xiaoxi.php';alert('消息标题和内容不能为空')</script>" ;
    }else{
    
    $date=date("Y-m-d");
    $m_id=$_COOKIE['man_id'];
    $re="insert into xiaoxi (x_title,dx,x_date,m_id,x_type) values ('$x_title','$x_con','$date','$m_id','$lb')";
    mysql_query($re);
    echo"<script>if(confirm('消息发布成功，是否返回到主页面？')){window.location.href='../man_mes.php';}else{window.location.href='../wenjuan/m_xiaoxi.php';};</script>";
   }
?>