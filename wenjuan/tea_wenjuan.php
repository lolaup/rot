<?php
   include('../php/dbcon.php');
   $w_id=$_GET['w_id'];
   $t_id=$_COOKIE['tea_id'];
//    $c_id=$_GET['c_id'];
   $re="select q_id,q_title,s_A,A_score,s_B,B_score,s_C,C_score,s_D,D_score from wenti where w_id='$w_id' and t_id='$t_id'";
   $query=mysql_query($re);
   $re1="select w_title from wenjuan where w_id='$w_id'";
   $query1=mysql_query($re1);
   $title=mysql_fetch_array($query1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main_wenjuan.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <script src="../bs/js/jquery.js"></script>
    <!-- <script src="../js/flash.js"></script> -->
    <script src="../js/design.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
    <script src="../bs/js/docs.min.js"></script>
</head>
<body>
    <div id="deq"class="container">
         <p id="title"><?php echo"{$title['w_title']}"?></p>
         <hr>
         <button class="btn btn-primary"data-toggle="modal" data-target="#danxuan">新增单选题</button>
         <button class="btn btn-success"data-toggle="modal" data-target="#duoxuan">新增多选题</button>
         <button class="btn btn-danger"data-toggle="modal" data-target="#jianda">新增单行文本题</button>
         <ul id="list-que">
             <?php
                while($value=mysql_fetch_array($query))
                {
                    echo'<li class="que i1"><label>';
                    echo"{$value['q_title']}";
                    echo'</label><br><label><input type="radio" name="que"/> ';
                    echo"{$value['s_A']}";
                    echo'(';
                    echo"{$value['A_score']}";
                    echo'分)</label><br><label><input type="radio" name="que"/>';
                    echo"{$value['s_B']}";
                    echo'(';
                    echo"{$value['B_score']}";
                    echo'分)</label><br><label><input type="radio" name="que"/>';
                    echo"{$value['s_C']}";
                    echo'(';
                    echo"{$value['C_score']}";
                    echo'分)</label><br><label><input type="radio" name="que"/>';
                    echo"{$value['s_D']}";
                    echo'(';
                    echo"{$value['D_score']}";
                    echo'分)</label><button class="btn btn-danger pull-right delete dan-btn"><a href="../php/wenti_del.php?q_id=';
                    echo"{$value['q_id']}";
                    echo'&w_id=';
                    echo $w_id;
                    echo'">删除</a></button><hr></li>';
                }
             ?>
             <!-- <li class="que i1">
                <label>问题(单选)</label>
                 <br>
                <label>
                    <input type="radio" name="que"/> 选项一
                </label> 
                 <br>
                <label>
                    <input type="radio" name="que"/> 选项二
                </label>
                <br> 
                <label>
                    <input type="radio" name="que"/> 选项三
                </label> 
                 <br>
                 <label>
                    <input type="radio" name="que"/> 选项四
                </label>
                <button class="btn btn-danger pull-right delete dan-btn">删除</button>
                <hr>   
             </li>
             
             <li class="que i2">
                <label>问题(多选)</label>
                <br>
               <label>
                   <input type="checkbox" /> 选项一
               </label> 
                <br>
               <label>
                   <input type="checkbox" /> 选项二
               </label>
               <br> 
               <label>
                   <input type="checkbox" /> 选项三
               </label> 
                <br>
                <label>
                   <input type="checkbox" /> 选项四
               </label>
               <button class="btn btn-danger pull-right delete duo-btn">删除</button>
               <hr>   
             </li> -->
             <!-- <li class="que i1">
                <label >问题(简答)</label>
                <br>
                    <input type="text" class="i-text"/> 
                    <button class="btn btn-danger pull-right delete j-btn">删除</button>
                    <hr>       
             </li>  -->
             
         </ul>
         <button class="btn btn-primary pull-right sub">提交</button>
    </div>
</body>
</html>

<!-- 单选模态框 -->
<div class="modal fade" tabindex="-1" role="dialog" id="danxuan">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">创建单选题...</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="../php/wenti_add.php?w_id=<?php echo $w_id;?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">问题</label>
                    <div class="col-sm-10">
                        <input type="text" name="q_title"class="form-control dan dan-que" id="inputEmail3" placeholder="输入问题...">
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-2 control-label ">A</label>
                        <div class="col-sm-6">
                            <input type="text" name="s_A"class="form-control dan dan-a"  placeholder="输入...">
                        </div>                        
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label ">A分值</label>
                    <div class="col-sm-6">
                        <input type="text" name="A_score"class="form-control dan fen-a" placeholder="输入...">
                    </div>                        
                </div>
                <div class="form-group">
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
                </div>
                <div class="form-group">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-success cj-dan">创建</button>
                </div>
            </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 多选模态框 -->
<div class="modal fade" tabindex="-1" role="dialog" id="duoxuan">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">创建多选题...</h4>
        </div>
        <div class="modal-body">
                <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">问题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control duo-que" id="inputEmail3" placeholder="输入问题...">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">A</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control duo sel-a" id="inputEmail3" placeholder="输入...">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">B</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control duo sel-b" id="inputEmail3" placeholder="输入...">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">C</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control duo sel-c" id="inputEmail3" placeholder="输入...">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">D</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control duo sel-d" id="inputEmail3" placeholder="输入...">
                                </div>
                        </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-success cj-duo">创建</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 简答模态框 -->
<div class="modal fade" tabindex="-1" role="dialog" id="jianda">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">创建简答题...</h4>
        </div>
        <div class="modal-body">
                <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">问题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control j-que" id="inputEmail3" placeholder="输入问题...">
                            </div>
                        </div>
               </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-success cj-j">创建</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

