<?php
   $x_id=$_GET['x_id'];
   include('../php/dbcon.php');
   $re="select x_title,dx from xiaoxi where x_id=$x_id";
   $query=mysql_query($re);
   $value=mysql_fetch_array($query);
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
         <p id="title">查看消息</p>
         <hr>
         <form action="../php/m_xiaoxi.php" method="post"class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-1">标题</label>
                <div class="col-sm-11"> 
                    <input type="text" class="form-control" id="inputEmail3" name="title"readonly="true" value="<?php echo"{$value['x_title']}"?>">
                </div>
            </div>
            <div class="form-group">
                <textarea  class="form-control"  rows="30" name="neirong" readonly="true"><?php echo "{$value['dx']}"?></textarea>
            </div>
        </form>
    </div>
</body>
</html>
