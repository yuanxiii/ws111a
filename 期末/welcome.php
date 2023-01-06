<?php
session_start();  //可用的變數存在session李
$username=$_SESSION["username"];
echo "<h1>你好 ".$username."</h1>";
echo "<a href='logout.php'>登出</a>";
    
?>
