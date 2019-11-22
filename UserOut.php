<?php
session_start();
$_SESSION['person']=NULL;

header("location:index.php");
?>