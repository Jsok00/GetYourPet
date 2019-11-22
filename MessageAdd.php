<?php
require('conn.php');

$mcontent=$_POST['mcontent'];
$pid=$_POST['pid'];

session_start();
$uid=$_SESSION['user']['uid'];

$sql = "insert into messages(uid,pid,mcontent,time) values ('$uid','$pid','$mcontent',now());";
mysqli_query($conn,$sql);

$location="location:PetMore.php?pid=".$pid;

//echo $sql;


header($location);
?>