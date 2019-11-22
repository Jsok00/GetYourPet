<?php
require('conn.php');
$pid=$_GET['pid'];
$sql="SELECT * from pets where pid=$pid;";
$res = mysqli_query($conn,$sql);

$pet=mysqli_fetch_array($res);

$sql2="SELECT messages.mid,messages.mcontent,messages.time,messages.upmid,users.uname from messages,users where messages.upmid is null and users.uid=messages.uid and messages.pid=$pid;";
$sql3="SELECT messages.mid,messages.mcontent,messages.time,messages.upmid,users.uname from messages,users where messages.upmid is not null and users.uid=messages.uid and messages.pid=$pid;";
$res2=mysqli_query($conn,$sql2);
$res3=mysqli_query($conn,$sql3);
$messages1 = array();
$messages2 = array();
while($row = mysqli_fetch_assoc($res2)){
     $messages1[] = $row;
	 
}
while($row = mysqli_fetch_assoc($res3)){
     $messages2[] = $row;
	 
}
for($x=0;$x<count($messages1);$x++){
	for($y=0;$y<count($messages2);$y++){
		if($messages2[$y]['upmid']==$messages1[$x]['mid']){
			$messages1[$x]['reply'][]=$messages2[$y];
		}
	}
}
require('PetMore.html');




?>