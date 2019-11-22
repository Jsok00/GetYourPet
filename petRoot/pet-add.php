<?php
require("../conn.php");
$pname=$_POST['pname'];
$psex=$_POST['psex'];
$page=$_POST['page'];
$psize=$_POST['psize'];
$pfur=$_POST['pfur'];
$jueyu=$_POST['jueyu'];
$yimiao=$_POST['yimiao'];
$quchong=$_POST['quchong'];
$save=$_POST['save'];
$pcontent=$_POST['pcontent'];
$pkind=$_POST['pkind'];
$sql = "insert into pets(pname,psex,page,psize,pfur,pjueyu,yimiao,quchong,save,pcontent,pkind,starttime)values('$pname','$psex','$page','$psize','$pfur','$pjueyu','$yimiao','$quchong','$save','$pcontent','$pkind',now());";
mysqli_query($conn,$sql);


require('pet-list.html');

?>