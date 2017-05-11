<?php
echo $_POST['submit']; 
if(!isset($_POST['submit'])){  
    exit('非法访问');  
}  
$pname = htmlspecialchars($_POST['pname']);  
$ppass = $_POST['ppass'];
include('con.php');
$check_query = mysql_query("select pname,pid from players where pname='$pname' and ppass='$ppass' limit 1");
if($result = mysql_fetch_array($check_query)){
    session_start();
    $_SESSION['pname'] = $pname;  
    $_SESSION['pid'] = $result['pid'];  
    echo $pname,'登陆成功  <a href="../hub.php">用户中心</a><br />';  
	echo $_SESSION['pname'];
	echo $_SESSION['pid'];
    echo '<a href="login.php?action=logout">注销</a><br />';  
    exit;  
} else {  
    exit('登录失败。点击此处<a href="javascript:history.back(-1);">返回</a>重试');  
}
if($_GET['action'] == "logout"){  
    unset($_SESSION['pid']);  
    unset($_SESSION['pname']);  
    echo '注销成功';  
    exit;  
}  
  
?>
