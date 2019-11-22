<?php
require('conn.php');
$sql="INSERT INTO users (uname,upassword,uphone,uaddress,uage,ujob,uroom,ucardid) VALUES ('$_POST[uname]','$_POST[upassword]','$_POST[uphone]','$_POST[uaddress]','$_POST[uage]','$_POST[ujob]','$_POST[uroom]','$_POST[ucardid]') ;";
mysqli_query($conn,$sql);

$uphone=$_POST['uphone'];
$upassword=$_POST['upassword'];
$sql2="SELECT * FROM users where uphone=$uphone and upassword=$upassword ;";

$res=mysqli_query($conn,$sql2);
$user = mysqli_fetch_array($res);

session_start();
$_SESSION['person']='user';
$_SESSION['user']=$user;
header("location:index.php");
?>