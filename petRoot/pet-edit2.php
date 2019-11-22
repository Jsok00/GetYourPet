<?php
require('../conn.php');
$pid=$_POST['pid'];
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
$sql = "update pets set pname='$pname',psex='$psex',page='$page',psize='$psize',pfur='$pfur',jueyu='$jueyu',yimiao ='$yimiao',quchong='$quchong',save='$save',pcontent='$pcontent',pkind='$pkind' where pid='$pid';";
mysqli_query($conn,$sql);
echo "修改成功";

?>