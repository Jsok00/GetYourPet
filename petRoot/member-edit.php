<?php
require("../conn.php");



$sql="UPDATE users SET uname= '$_POST[uname]',upassword='$_POST[upassword]', uphone='$_POST[uphone]' WHERE uid=$_POST[uid];";


mysqli_query($conn,$sql);
echo "修改成功";


?>