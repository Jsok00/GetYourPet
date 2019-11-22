<?php
require("conn.php");
$username=$_POST['username'];
$upassword=$_POST['upassword'];
$sql="SELECT * FROM users where uid=$username and upassword=$upassword ;";
$res=mysqli_query($conn,$sql);
$user = mysqli_fetch_array($res);
if($user['uid']==$username && $user['upassword']==$upassword){
	session_start();
	$_SESSION['person']='user';
	$_SESSION['user']=$user;
	header("location:index.php");
}else{
	header("location:UserLogin.html");
}


?>