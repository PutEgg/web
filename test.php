<?php
$ms=mysql_connect("127.0.0.1","root","woshizhu123");
if (!$ms){echo "Connect failed! Error Message:" . mysql_error();}
else {echo "Connect to Databases! Message:" . $ms;}
echo "\n";
mysql_select_db("test",$ms);
$sql="insert into data (uid,name,phone,age,sex,site) values('$_POST[uid]','$_POST[name]','$_POST[phone]','$_POST[age]','$_POST[sex]','$_POST[site]')";

if (!mysql_query($sql,$ms))(die('error:' . mysql_error()));
echo "add data";
mysql_close($ms);

