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
         <p id="title">消息发布</p>
         <hr>
         <form action="../php/m_xiaoxi.php" method="post"class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="请输入消息标题....">
                </div>
            </div>
            <div class="form-group">
                <textarea  class="form-control"  rows="30" name="neirong"></textarea>
            </div>
            <label >
                <input type="radio" name="que" value="teacher"/> 教师
            </label> 
            <br>
            <label>
                <input type="radio" name="que" value="student"/> 学生
            </label>
            <br>
            <label>
                <input type="radio" name="que" value="all" checked="checked"/> 所有人
            </label>  
                <hr>     
            <button class="btn btn-primary pull-right sub"type="submit">提交</button>
        </form>
    </div>
</body>
</html>