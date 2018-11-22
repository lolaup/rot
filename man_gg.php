<?php
    include('php/dbcon.php');
    $re="select w_id,w_title,day_creat,day_finish from wenjuan";
    $query=mysql_query($re);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/man_gg.css">
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
     text-decoration:none;
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
            <li ><a href="man_mes.php" ><span class="glyphicon glyphicon-home"> 发送系统通知</span></a></li>
            <li ><a href="man_zhanghao.php"><span class="glyphicon glyphicon-edit"> 账号管理</span></a></li>
            <li class="this"><a href="man_gg.php"><span class="glyphicon glyphicon-calendar"> 制定公共题目</span></a></li>
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
                <button id="fabu"class="btn btn-danger btn-lg pull-right"data-toggle="modal" data-target="#danxuan">点击创建问卷</button>        
                <table  class="table table-striped">
                    <tr class="active">
                        <td>序号</td>
                        <td>问卷</td>
                        <td>问卷开始时间</td>
                        <td>问卷结束时间</td>
                        <td>进入</td>
                        <td>删除</td>
                      </tr>
                     <?php 
                      $i=0;
                         while($value=mysql_fetch_array($query)){
                             $i++;
                             echo '<tr><td>';
                             echo $i;
                             echo'</td><td>';
                             echo"{$value['w_title']}";
                             echo'</td><td>';
                             echo"{$value['day_creat']}";
                             echo'</td><td>';
                             echo"{$value['day_finish']}";
                             echo'</td><td><a href="wenjuan/man_wenticj.php?w_id=';
                             echo"{$value['w_id']}";
                             echo'">进入</a></td><td><a href="php/man_wenjuandel.php?w_id=';
                             echo"{$value['w_id']}";
                             echo'">删除</a></td></tr>';    
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
<!-- 单选模态框 -->
  <div class="modal fade" tabindex="-1" role="dialog" id="danxuan">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">创建问卷</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="php/man_wenjuancj.php" method="post">
                <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">问卷名</label>
                    <div class="col-sm-10">
                        <input type="text" name="wj_title"class="form-control dan dan-que" id="inputEmail3" placeholder="输入问题...">
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label ">问卷开始时间</label>
                        <div class="col-sm-6">
                            <input type="text" name="st"class="form-control dan dan-a"  placeholder="请输入以下格式..如：2018-10-20">
                        </div>                        
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label ">问卷结束时间</label>
                    <div class="col-sm-6">
                        <input type="text" name="ft"class="form-control dan fen-a" placeholder="请输入以下格式..如：2018-10-20">
                    </div>                        
                </div>
                <!-- <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">B</label>
                        <div class="col-sm-6">
                            <input type="text" name="s_B" class="form-control dan dan-b" id="inputEmail3" placeholder="输入...">
                        </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label ">B分值</label>
                    <div class="col-sm-6">
                        <input type="text" name="B_score"class="form-control dan fen-b" placeholder="输入...">
                    </div>                        
                </div>
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">C</label>
                        <div class="col-sm-6">
                            <input type="text" name="s_C" class="form-control dan dan-c" id="inputEmail3" placeholder="输入...">
                        </div>
                </div> -->
                <!-- <div class="form-group">
                    <label  class="col-sm-2 control-label ">C分值</label>
                    <div class="col-sm-6">
                        <input type="text" name="C_score" class="form-control dan fen-a" placeholder="输入...">
                    </div>                        
                </div>
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">D</label>
                        <div class="col-sm-6">
                            <input type="text" name="s_D" class="form-control dan dan-d" id="inputEmail3" placeholder="输入...">
                        </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label ">D分值</label>
                    <div class="col-sm-6">
                        <input type="text"name="D_score" class="form-control dan fen-a" placeholder="输入...">
                    </div>                        
                </div> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-success cj-dan">创建</button>
                </div>
            </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->