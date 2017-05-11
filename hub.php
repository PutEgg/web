<?php  
session_start();
if(!isset($_SESSION['pid'])){  
    header("Location:login.html");
    exit();
}
include('conn.php');  
$pid = $_SESSION['pid'];  
$pname = $_SESSION['pname'];  
$player_query = mysql_query("select * from players where pid = '$pid' limit 1");
$row = mysql_fetch_array($player_query);
echo '玩家信息：<br />';  
echo '玩家ID：',$pid,'<br />';  
echo '玩家昵称：',$pname,'<br />';
echo '<a href="login/login.php?action=logout">注销</a> 登录<br />';  
?>  
