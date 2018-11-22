<?php

    
    class student{
        
        var $stu_id;
        function get($stu_id)
        {
            $sql="select * from stu_psw where s_id=$stu_id";
            mysql_query("SET NAMES 'gb2312'");
            $info=@mysql_query($sql);
            while($re=mysql_fetch_array($info))
            {
                echo $re['s_name'];
            }
        }
    }
?>