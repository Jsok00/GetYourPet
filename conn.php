<?php
header("Content-type: text/html; charset=utf-8");
//链接数据库
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'pets');
//判断错误函数
if(!$conn){
   die(mysql_error());
}
//选择数据库
 //mysql_query("use pets",$conn);
//设定字符集编码
mysqli_query($conn,"set names utf8");

?>