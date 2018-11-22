<?php
   include('php/dbcon.php');
   $re="select xiaoxi.x_id,man_psw.m_name,xiaoxi.x_id,xiaoxi.x_title,xiaoxi.x_date,xiaoxi.x_type from man_psw,xiaoxi where man_psw.m_id=xiaoxi.m_id";
   $query=mysql_query($re);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/man_message.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/man_main.css">
    <link rel="stylesheet" href="css/hover.css">
    <script src="bs/js/jquery.js"></script>
    <script src="js/flash.js"></script>
    <script src="bs/js/bootstrap.js"></script>
    <script src="bs/js/docs.min.js"></script>
    <script src="js/hover.js"></script>
    <title>Document</title>
    <style>
    #right-content .pag a{
     /* text-decoration:none;
     color:#fff; */
    }
    #fabu{
        margin-bottom:10px;
    }
    </style>
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
            <li class="this"><a href="man_mes.php" ><span class="glyphicon glyphicon-home"> 发送系统通知</span></a></li>
            <li ><a href="man_zhanghao.php"><span class="glyphicon glyphicon-edit"> 账号管理</span></a></li>
            <li ><a href="man_gg.php"><span class="glyphicon glyphicon-calendar"> 制定公共题目</span></a></li>
            <li ><a href="man_wenjuan.php"><span class="glyphicon glyphicon-list-alt"> 查看问卷结果</span></a></li>
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
                       <span class="glyphicon glyphicon-user"></span>  <?php echo $_COOKIE['man_name']?>  <span class="glyphicon glyphicon-triangle-bottom"></span>
                    </button>  
                </div>
                    <span class="glyphicon glyphicon-menu-hamburger pull-left sp2"></span>
            </div>
    
            <div class="pag pag1">
                <button id="fabu"class="btn btn-danger btn-lg pull-right"><a href="wenjuan/m_xiaoxi.php">点击发布消息</a></button>        
                <table  class="table table-striped">
                    <tr>
                       <td>消息标题</td>
                       <td>发布时间</td>
                       <td>发布对象</td>
                       <td>查看</td>
                    </tr>
                    <?php
                       while($value=mysql_fetch_array($query))
                       {
                           $x_type=$value['x_type'];
                           echo '<tr><td>';
                           echo "{$value['x_title']}";
                           echo '</a></td><td>';
                           echo "{$value['x_date']}";
                           echo '</td><td>';
                           if($x_type=="teacher")
                           {
                               echo"教师";
                           }
                           elseif($x_type=="student")
                           {
                               echo"学生";
                           }
                           else{
                               echo"所有人";
                           }
                           echo'</td><td><a href="wenjuan/chakanmes.php?x_id=';
                           echo "{$value['x_id']}" ;
                           echo'">查看</a></td><tr>'; 
                       }
                    ?>
                </table>
                
                
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
    </div>

    
</body>
</html>