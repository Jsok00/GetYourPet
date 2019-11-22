<?php
require('../conn.php');

$sql="SELECT * from pets where pid=$_GET[pid];";
$res = mysqli_query($conn,$sql);
$pets = mysqli_fetch_array($res);
require('pet-edit.html');


?>