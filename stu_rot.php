<?php
   include('php/dbcon.php');
   $id=$_COOKIE['stu_id'];
   $re="select xsrotb.c_id,xsrotb.t_id,xsrotb.score,wenjuan.day_creat,wenjuan.day_finish,wenjuan.w_id,tea_psw.t_name,course.c_name from tea_psw,xsrotb,course,wenjuan where tea_psw.t_id=xsrotb.t_id and xsrotb.s_id='$id' and xsrotb.c_id=course.c_id and xsrotb.c_id=wenjuan.c_id";
   $query=mysql_query($re);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stu_rot.css">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/hover.css">
    <script src="bs/js/jquery.js"></script>
    <script src="js/flash.js"></script>
    <script src="bs/js/bootstrap.js"></script>
    <script src="bs/js/docs.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="left-nav">
        <div class="inner" id="title">
            评教系统
        </div>
        <div id="info">
            <div id="headimg"><img src="image/2.jpg" height="100%"></div>
            <div id="headtext"><p>欢迎，<?php echo $_COOKIE['stu_id'] ?></p><p><?php echo$_COOKIE['stu_name'] ?></p></div>
        </div>
        <div class="input-group" id="seach">
            <input type="text" class="form-control" placeholder=" Search.." >
            <span class="input-group-addon sp1"><span class="glyphicon glyphicon-search spp1" ></span></span>
        </div>
        <hr>
        <ul id="list">
            <li ><a href="stumes.php"><span class="glyphicon glyphicon-home"> 系统通知</span></a></li>
            <li><a href="http://localhost/teacher/stuinfo.php"><span class="glyphicon glyphicon-user"> 个人信息</span></a></li>
            <li class="active this"><a href="http://localhost/teacher/stu_rot.php"><span class="glyphicon glyphicon-edit"> 填写评教</span></a></li>
            <li ><a href="sturefore.php"><span class="glyphicon glyphicon-comment"> 留言反馈</span></a></li>
            <li ><a href="stu_psw.php"><span class="glyphicon glyphicon-cog"> 修改密码</span></a></li>
            <li data-toggle="modal" data-target="#exit"><a href="#"><span class="glyphicon glyphicon-log-out"> 退出反馈</span></a></li>
        </ul> 
    </div>

    <div id="right-content"> 
            <div class="container-fluid" id="header">
                <div class="popover-demo pull-right">
                    <button type="button" class="btn btn-success btn1" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus.">
                        <span class="glyphicon glyphicon-envelope sp1"></span> message <span class="badge">4</span>
                    </button>
         
         
                    <button type="button" class="btn btn-success btn2" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                        sagittis lacus vel augue laoreet rutrum faucibus.">
                       <span class="glyphicon glyphicon-user"></span>  <?php echo $_COOKIE['stu_name'] ?>  <span class="glyphicon glyphicon-triangle-bottom"></span>
                    </button>  
                </div>
                    <span class="glyphicon glyphicon-menu-hamburger pull-left sp2"></span>
            </div>
            <!-- 学生评教 -->
            <div id="rot" class="pag pag3">
                <h3>学生评教</h3>
                <br>
                <!-- <span class="sp4">评教：</span> -->
                <!-- <div class="btn-group">
                    <button type="button" class="btn btn-success">17-18(1)期中评教</button>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">17-18(1)期中评教</a></li>
                      <li><a href="#">17-18(1)期中评教</a></li>
                      <li><a href="#">17-18(1)期中评教 here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">17-18(1)期中评教</a></li>
                    </ul>
                  </div>
                <span class="sp4">评教时间：2018-01-01至2018-01-06</span> -->
                <table class="table table-bordered tab2">
                   <tr class="active">
                     <td>序号</td>
                     <td>教师姓名</td>
                     <td>教授课程</td>
                     <td>开始时间</td>
                     <td>结束时间</td>
                     <td>进入评教</td>
                     <td>评教状态</td>
                     <td>得分</td>
                   </tr>
                   
                   <?php
                   while($value=mysql_fetch_array($query))
                   {
                    $day_c=$value['day_creat'];
                    $day_f=$value['day_finish'];
                    $sval=$value['score'];
                    if($day_c<=date('Y-m-d')&$day_f>=date('Y-m-d'))
                    {
                    echo'<tr><td>';
                    echo'1';
                    echo'</td><td>';
                    echo"{$value['t_name']}";
                    echo'</td><td>';
                    echo"{$value['c_name']}";
                    echo'</td><td>';
                    echo"{$value['day_creat']}";
                    echo'</td><td>';
                    echo"{$value['day_finish']}";
                    echo'</td><td><a href="wenjuan/stu_dajuan.php?w_id=';
                    echo"{$value['w_id']}";
                    echo'&c_id=';
                    echo"{$value['c_id']}";
                    echo'&t_id=';
                    echo"{$value['t_id']}";
                    echo'&true=0';
                    echo'">进入</a></td><td>';
                    if(empty($sval))
                    {
                        echo'未评教';
                    }
                    else{
                        echo'已评教';
                    }
                    echo'</td><td>';
                    echo"{$value['score']}";
                    echo'</td></tr> ';
                   }else if($day_c<=date('Y-m-d')&$day_f<date('Y-m-d')){
                    echo'<tr><td>';
                    echo'1';
                    echo'</td><td>';
                    echo"{$value['t_name']}";
                    echo'</td><td>';
                    echo"{$value['c_name']}";
                    echo'</td><td>';
                    echo"{$value['day_creat']}";
                    echo'</td><td>';
                    echo"{$value['day_finish']}";
                    echo'</td><td><a href="wenjuan/stu_dajuan.php?w_id=';
                    echo"{$value['w_id']}";
                    echo'&c_id=';
                    echo"{$value['c_id']}";
                    echo'&t_id=';
                    echo"{$value['t_id']}";
                    echo'&true=1';
                    echo'">进入</a></td><td>';
                    echo'评教已过期';
                    echo'</td><td>';
                    echo"{$value['score']}";
                    echo'</td></tr> ';
                   }
                }
                   ?>
                </table>
            </div>
    </div>

    
</body>
</html>
<!-- 退出模态框 -->
<div class="modal fade" id="exit">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">确认退出？</h4>
        </div>
        <div class="modal-body">
          确认退出当前页面？
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success"><a href="http://localhost/teacher/login.php">确认</a></button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
        </div>
      </div>
    </div>
  </div>