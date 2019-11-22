<?php
require('conn.php');
$sql="SELECT * from pets where dead='N';";
$res = mysqli_query($conn,$sql);

$pets = array();

while($row = mysqli_fetch_assoc($res)){
     $pets[] = $row;
	 
}
require('PetList.html');
?>