<?php
$ms=mysql_connect("127.0.0.1","root","woshizhu123");
if (!$ms){echo "Connect failed! Error Message:" . mysql_error();}
else {echo "Connect to Databases! Message:" . $ms;}
echo "\n";
mysql_select_db("player",$ms);
$sql="insert into players (pid,pname,ppass,pphone,pemail,pregdate) values('','$_POST[pname]','$_POST[ppass]','$_POST[pphone]','$_POST[pemail]','$_POST[pregdate]')";

if (!mysql_query($sql,$ms))(die('error:' . mysql_error()));
echo "add data";
mysql_close($ms);

