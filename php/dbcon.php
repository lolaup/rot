<?php
     header("Content-Type: text/html;charset=utf8");
     $conn = mysql_connect("localhost","root","");  
     mysql_select_db("bishe",$conn);  
     mysql_query("set names utf8"); 
?>