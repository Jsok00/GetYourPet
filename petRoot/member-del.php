<?php
require('../conn.php');
$uid=$_GET['uid'];
$sql="DELETE  FROM users WHERE uid=".$uid;

mysqli_query($conn,$sql);
header("location:/pets1/petroot/member-list.php");
?>