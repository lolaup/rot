<?php 
//登录   
   
//包含数据库连接文件  
include('dbcon.php'); 
$username = $_POST['username'];  
$password = $_POST['password']; 
//检测用户名及密码是否正确  
$check_tquery = mysql_query("select * from tea_psw where zhanghao='$username' and psw='$password' limit 1");
$check_mquery = mysql_query("select * from man_psw where zhanghao='$username' and psw='$password' limit 1");
$check_squery = mysql_query("select * from stu_psw where zhanghao='$username' and psw='$password' limit 1");

if($sresult = mysql_fetch_array($check_squery)){ 
    $stu_id= $sresult['s_id'];
    setcookie('stu_id',$stu_id);
    //登录成功  
    echo "<script>window.location.href='http://localhost/teacher/stumes.php?user={$sresult['s_id']}';</script>";  
    exit;  
}elseif($tresult = mysql_fetch_array($check_tquery)){  
    //登录成功  
    echo "<script>window.location.href='http://localhost/teacher/tea_mes.php?user={$tresult['t_id']}';</script>";  
    exit;  
} elseif($mresult = mysql_fetch_array($check_mquery))
{
    echo "<script>window.location.href='http://localhost/teacher/man_mes.php?user={$mresult['m_id']}';</script>";  
    exit;  
}else{  
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');  
}  
?>  
