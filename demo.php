<?php
require('conn.php');
$sql="SELECT * FROM pets order by rand() limit 3";
$res = mysqli_query($conn,$sql);

$pets = array();

while($row = mysqli_fetch_assoc($res)){
     $pets[] = $row;
	 
}
var_dump($pets);
echo pets[0]['pid'];



?>