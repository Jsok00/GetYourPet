<?php
require('../conn.php');

$sql="SELECT applys.aid,applys.uid,applys.pid,applys.aintroduce,applys.aprogress,applys.atime,users.uname,users.uphone from applys,users where applys.uid=users.uid;";

$res = mysqli_query($conn,$sql);

$applys = array();

while($row = mysqli_fetch_assoc($res)){
     $applys[] = $row;
	 
}

require('applyOrder-list.html');









?>