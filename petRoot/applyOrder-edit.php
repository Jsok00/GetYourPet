<?php
require("../conn.php");



$sql="UPDATE applys SET aprogress= '$_POST[aprogress]' WHERE aid=$_POST[aid];";


mysqli_query($conn,$sql);
echo "修改成功";
echo $sql;


?>