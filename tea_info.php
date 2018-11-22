<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/info.css">
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
            <div id="headtext"><p>欢迎，<?php echo $_COOKIE['tea_id'] ?></p><p><?php echo $_COOKIE['tea_name']?></p></div>
        </div>
        <div class="input-group" id="seach">
            <input type="text" class="form-control" placeholder=" Search.." >
            <span class="input-group-addon sp1"><span class="glyphicon glyphicon-search spp1" ></span></span>
        </div>
        <hr>
        <ul id="list">
            <li ><a href="tea_mes.php" ><span class="glyphicon glyphicon-home"> 系统通知</span></a></li>
            <li class="this"><a href="tea_info.php"><span class="glyphicon glyphicon-user"> 个人信息</span></a></li>
            <li ><a href="tea_design.php"><span class="glyphicon glyphicon-list-alt"> 查看评教结果</span></a></li>
            <li ><a href="tea_rot.php"><span class="glyphicon glyphicon-edit"> 制定问卷</span></a></li>
            <li ><a href="tea_chat.php"><span class="glyphicon glyphicon-comment"> 留言反馈</span></a></li>
            <li ><a href="tea_psw.php"><span class="glyphicon glyphicon-cog"> 修改密码</span></a></li>
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
                        <span class="glyphicon glyphicon-user"></span>  <?php echo $_COOKIE['tea_name'] ?>  <span class="glyphicon glyphicon-triangle-bottom"></span>
                    </button>  
                </div>
                    <span class="glyphicon glyphicon-menu-hamburger pull-left sp2"></span>
            </div>
    
            <div id="table"class="pag pag2">
                <table class="table table-bordered ta ta1">
                    <tr>
                        <td class="active" width="150px">教师号</td>
                        <td>aaa</td>
                        <td class="active" width="150px">姓名</td>
                        <td>aaa</td>
                        <td class="active" width="150px">姓名拼音</td>
                        <td>aaa</td>
                        <td rowspan="7" width="200px">
                          <img src="image/2.jpg" width="200px">
                        </td>
                    </tr>
                    <tr>
                        <td class="active">性别</td>
                        <td>aaa</td>
                        <td class="active">学历</td>
                        <td>aaa</td>
                        <td class="active">合同制</td>
                        <td>aaa</td>
                    </tr>
                    <tr>
                        <td class="active">年纪</td>
                        <td>aaa</td>
                        <td class="active">入职年份</td>
                        <td>aaa</td>
                        <td class="active">合同年</td>
                        <td>aaa</td>
                    </tr>
                    <tr>
                        <td class="active">专业</td>
                        <td>aaa</td>
                        <td class="active">专业方向</td>
                        <td>aaa</td>
                        <td class="active">行政院系</td>
                        <td>aaa</td>
                    </tr>
                    <tr>
                        <td class="active">身份证号</td>
                        <td>aaa</td>
                        <td class="active">大学名称</td>
                        <td>aaa</td>
                        <td class="active">生源地</td>
                        <td>aaa</td>
                    </tr>
                    <tr>
                        <td class="active">出生日期</td>
                        <td>aaa</td>
                        <td class="active">民族</td>
                        <td>aaa</td>
                        <td class="active">政治面貌</td>
                        <td>aaa</td>
                    </tr>
                    <tr>
                        <td class="active">移动电话</td>
                        <td>aaa</td>
                        <td class="active">籍贯</td>
                        <td>aaa</td>
                        <td class="active">邮编</td>
                        <td>aaa</td>
                    </tr>      
                    <tr>
                        <td class="active">通讯地址</td>
                        <td colspan="6">aaa</td>
                    </tr>
                    <tr>
                        <td class="active">身高</td>
                        <td>aaa</td>
                        <td class="active">体重</td>
                        <td colspan="4">aaa</td>
                    </tr>
                    <tr>
                        <td class="active">银行卡号</td>
                        <td>aaa</td>
                        <td class="active">学籍异动</td>
                        <td colspan="4">aaa</td>
                    </tr>
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