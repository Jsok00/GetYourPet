<?php
require('../conn.php');
$sql="SELECT * from users;";
$res = mysqli_query($conn,$sql);

$users = array();

while($row = mysqli_fetch_assoc($res)){
     $users[] = $row;
	 
}


require('member-list.html');

?>