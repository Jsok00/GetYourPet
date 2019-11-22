<?php
require('../conn.php');

$sql="SELECT * from pets where dead='Y';";

$res = mysqli_query($conn,$sql);

$deadpets = array();

while($row = mysqli_fetch_assoc($res)){
     $deadpets[] = $row;
	 
}

require('deadpets-list.html');



?>