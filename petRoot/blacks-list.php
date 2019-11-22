<?php
require('../conn.php');
$sql="SELECT * from blacks;";
$res = mysqli_query($conn,$sql);

$blacks = array();

while($row = mysqli_fetch_assoc($res)){
     $blacks[] = $row;
	 
}

require('blacks-list.html');



?>