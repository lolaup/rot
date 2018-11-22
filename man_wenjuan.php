<?php
   include('php/dbcon.php');
   $re="select tea_psw.t_name,xsrotb.c_id,xsrotb.t_id,xsrotb.score,wenjuan.day_creat,wenjuan.day_finish,wenjuan.w_id,tea_psw.t_name,course.c_name from tea_psw,xsrotb,course,wenjuan where tea_psw.t_id=xsrotb.t_id and xsrotb.c_id=course.c_id and xsrotb.c_id=wenjuan.c_id";
   $query=mysql_query($re);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/man_main.css">
    <link rel="stylesheet" href="css/man_wenjuan.css">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/hover.css">
    <script src="bs/js/jquery.js"></script>
    <script src="js/hover.js"></script>
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
             <div id="headtext"><p>欢迎，<?php echo $_COOKIE['man_id']?></p><p><?php echo $_COOKIE['man_name']?></p></div>
        </div>
        <div class="input-group" id="seach">
            <input type="text" class="form-control" placeholder=" Search.." >
            <span class="input-group-addon sp1"><span class="glyphicon glyphicon-search spp1" ></span></span>
        </div>
        <hr>
        <ul id="list">
            <li ><a href="man_mes.php" ><span class="glyphicon glyphicon-home"> 发送系统通知</span></a></li>
            <li ><a href="man_zhanghao.php"><span class="glyphicon glyphicon-edit"> 账号管理</span></a></li>
            <li ><a href="man_gg.php"><span class="glyphicon glyphicon-calendar"> 制定公共题目</span></a></li>
            <li class="this"><a href="man_wenjuan.php"><span class="glyphicon glyphicon-list-alt"> 查看问卷结果</span></a></li>
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
                        <span class="glyphicon glyphicon-user"></span>  <?php echo $_COOKIE['man_name'] ?>  <span class="glyphicon glyphicon-triangle-bottom"></span>
                    </button>  
                </div>
                    <span class="glyphicon glyphicon-menu-hamburger pull-left sp2"></span>
            </div>
    
            <div id="meb" class="pag pag4">
            <p class="pi1">对魏滢老师的评教详情<button type="button" class="btn btn-danger pull-right bt2">修改</button></p>
              <table class="table table-bordered table-hover">
              <tr class="active">
                 <td>序号</td>
                 <td>教授课程</td>
                 <td>教师名</td>
                 <td>问卷时间</td>
                 <td>分数</td>
               </tr>
                  <?php
                      $i=0;
                      while($value=mysql_fetch_array($query)){
                          $i++;
                          echo'<tr><td>';
                          echo $i;
                          echo'</td><td>';
                          echo"{$value['c_name']}";
                          echo'</td><td>';
                          echo"{$value['t_name']}";
                          echo'</td><td>';
                          echo"{$value['day_creat']}";
                          echo'---------';
                          echo"{$value['day_finish']}";
                          echo'</td><td>';
                          echo"{$value['score']}";
                          echo'</td></tr>';
                      }
                   ?>
              </table>
              <button type="submit" class="btn btn-success pull-right" style="margin-right:10px"
              data-toggle="modal" data-target="#finish">完成</button>
            </div>
    </div>

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
</body>
</html>