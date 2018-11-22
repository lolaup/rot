<?php
    $w_id=$_GET['w_id'];
    $c_id=$_GET['c_id'];
    $t_id=$_GET['t_id'];
    $true=$_GET['true'];
    include('../php/dbcon.php');
    $re="select w_title from wenjuan where w_id='$w_id'";
    $query=mysql_query($re);
    $title=mysql_fetch_array($query);
    $re2="select q_title,s_A,s_B,s_C,s_D,A_score,B_score,C_score,D_score from wenti where w_id='$w_id' and t_id='$t_id'";
    $query2=mysql_query($re2);
    $re3="select q_title,s_A,s_B,s_C,s_D,A_score,B_score,C_score,D_score from man_wenti where w_id='$w_id'";
    $query3=mysql_query($re3);
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
    <script src="../js/dajuan.js"></script>
    <script src="../bs/js/bootstrap.js"></script>
    <script src="../bs/js/docs.min.js"></script>
    <style>
    .b{
    margin-bottom:50px; 
    } 
    </style>
</head>
<body>
    <div id="deq"class="container">
         <p id="title"><?php echo"{$title['w_title']}"?></p>
         <hr>
         <ul id="list-que">
             <?php 
                $i=0;
                if($true=0){
                 while($value=mysql_fetch_array($query2))
                 {
                     $i++;
                     echo'<li class="que i1">'.$i.'、<label>';
                     echo"{$value['q_title']}";
                     echo'</label><br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$value['A_score']}";
                     echo'"/> ';
                     echo"{$value['s_A']}";
                     echo'</label> <br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$value['B_score']}";
                     echo'"/> ';
                     echo"{$value['s_B']}";
                     echo'</label><br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$value['C_score']}";
                     echo'"/> ';
                     echo"{$value['s_C']}";
                     echo' </label><br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$value['D_score']}";
                     echo'"/> ';
                     echo"{$value['s_D']}";
                     echo' </label><hr></li>';     
                 }
                 while($valuez=mysql_fetch_array($query3))
                 {
                     $i++;
                     echo'<li class="que i1">'.$i.'、<label>';
                     echo"{$valuez['q_title']}";
                     echo'</label><br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['A_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_A']}";
                     echo'</label> <br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['B_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_B']}";
                     echo'</label><br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['C_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_C']}";
                     echo' </label><br><label><input type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['D_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_D']}";
                     echo' </label><hr></li>';     
                 }
                }elseif($true=1){
                    while($value=mysql_fetch_array($query2))
                 {
                     $i++;
                     echo'<li class="que i1">'.$i.'、<label>';
                     echo"{$value['q_title']}";
                     echo'</label><br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$value['A_score']}";
                     echo'"/> ';
                     echo"{$value['s_A']}";
                     echo'</label> <br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$value['B_score']}";
                     echo'"/> ';
                     echo"{$value['s_B']}";
                     echo'</label><br><label><input  disabled type="radio" name="que'.$i.'"value="';
                     echo"{$value['C_score']}";
                     echo'"/> ';
                     echo"{$value['s_C']}";
                     echo' </label><br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$value['D_score']}";
                     echo'"/> ';
                     echo"{$value['s_D']}";
                     echo' </label><hr></li>';     
                 }
                 while($valuez=mysql_fetch_array($query3))
                 {
                     $i++;
                     echo'<li class="que i1">'.$i.'、<label>';
                     echo"{$valuez['q_title']}";
                     echo'</label><br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['A_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_A']}";
                     echo'</label> <br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['B_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_B']}";
                     echo'</label><br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['C_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_C']}";
                     echo' </label><br><label><input disabled type="radio" name="que'.$i.'"value="';
                     echo"{$valuez['D_score']}";
                     echo'"/> ';
                     echo"{$valuez['s_D']}";
                     echo' </label><hr></li>';     
                 }
                }
             ?>
             <!-- <li class="que i1">
                <label>问题</label>
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
                <hr>   
             </li> -->
             
             <!-- <li class="que i2">
                <label>问题</label>
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
               <hr>   
             </li> -->
             <li class="que i1">
                <label >你对老师有什么好的建议吗？(可以匿名留言)</label>
                <br>
                    <input type="text" class="i-text"/> 
                <br>    
                <label>
                <input type="radio" name="que"/> 匿名
                </label> 
                 <br>
                 <label>
                    <input type="radio" name="que"/> 公开
                </label> 
                <hr>     
             </li>
             <button class="btn btn-primary b"id="sub">提交</button>
             <button class="btn btn-danger b"id="dis">取消</button>
         </ul>
    </div>
</body>
</html>
<script>
    $(function(){
    $('#sub').click(function(){
        sum=0;
        for(i=1;i<= <?php echo $i?>;i++)
        {
            val=$('input[name="que'+i+'"]:checked').val();
            sum+=parseInt(val);     
        }
        $.post("../php/wjtijiao.php?c_id=<?php echo $c_id?>",
       {
         sum:sum
       },
       function(data,status){
           if(confirm('提交成功,是否返回到主页面？')){
            window.location.href='../stu_rot.php';
           }
          
       }); 
    });
})
</script>
