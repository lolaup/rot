<?php 
//登录   
   
//包含数据库连接文件  
include('php/dbcon.php'); 
if(isset($_POST['username'])&& isset($_POST['password'])){
$username = $_POST['username'];  
$password = $_POST['password']; 
//检测用户名及密码是否正确  
$check_tquery = mysql_query("select * from tea_psw where zhanghao='$username' and psw='$password' limit 1");
$check_mquery = mysql_query("select * from man_psw where zhanghao='$username' and psw='$password' limit 1");
$check_squery = mysql_query("select * from stu_psw where zhanghao='$username' and psw='$password' limit 1");

   if($sresult = mysql_fetch_array($check_squery)){ 
    $stu_id= $sresult['s_id'];
    $stu_name=$sresult['s_name'];
    setcookie('stu_id',$stu_id);
    setcookie('stu_name',$stu_name);
    //登录成功  
    echo "<script>window.location.href='http://localhost/teacher/stumes.php';</script>";  
    exit;  
   }elseif($tresult = mysql_fetch_array($check_tquery)){  
    //登录成功
    $tea_id= $tresult['t_id'];
    $tea_name=$tresult['t_name'];
    setcookie('tea_id',$tea_id);
    setcookie('tea_name',$tea_name);  
    echo "<script>window.location.href='http://localhost/teacher/tea_mes.php';</script>";  
    exit;  
   } elseif($mresult = mysql_fetch_array($check_mquery))
   {
    $man_id= $mresult['m_id'];
    $man_name=$mresult['m_name'];
    setcookie('man_id',$man_id);
    setcookie('man_name',$man_name);  
    echo "<script>window.location.href='http://localhost/teacher/man_mes.php?user={$mresult['m_id']}';</script>";  
    exit;  
   }else{  
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');  
   }  
}
?>  




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="bs/js/jquery.js"></script>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <script src="bs/js/bootstrap.js"></script>
    <title>Document</title>
    <style>
        body{
            background: #5cb85c;
            color:#fff;
        }
        .p1{
            text-align: center;
            font-size:60px;
            margin-top:100px;
        }
        #fom{
            width:560px;
        }
        #fom div .in1{
            height:60px;
            list-style: none;
            border:0;
            border-bottom:1px solid #fff; 
            box-shadow: none;
        }
        #fom .in2{
            height:20px;
            width:20px;
            list-style: none;
            color:#fff;
        }
        #fom .d1{
            margin: 20px 0 10px 0;
        }
        #fom .sp2{
            vertical-align:bottom;
            font-size: 16px;
            margin-left:10px;
        }
        #fom .d2{
            margin-top:40px; 
        }
        #fom .bt1{
            display: block;
            width:100%;
            margin-top:10px; 
            height:50px;
        }
        #fom div .sp{
            list-style: none;
            border:0;
            border-bottom:1px solid #fff; 
            background: #fff;
            
        }
        #fom div .sp span{
            font-size:18px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="fom">
        <h1 class="p1">评教系统</h1>
        <form action="http://localhost/teacher/login.php" method="post">
            <div class="input-group d1">
                <span class="input-group-addon sp" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control in1" placeholder="请输入学号" name="username">
              </div>
              <div class="input-group d1">
                <span class="input-group-addon sp" id="basic-addon3"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" class="form-control in1" placeholder="请输入密码" name="password">
              </div>
              <div class="d2">
                <input type="checkbox"><span class="sp2">Remember me</span>
              </div>
           <input type="submit" class="btn btn-primary bt1" value="登录">
        </form>
    </div>
</body>
</html>