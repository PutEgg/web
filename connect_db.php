<?php
header("Content-type:text/html;charset=utf-8");
$link = mysql_connect('127.0.0.1','root','woshizhu123');
mysql_select_db('gradesystem',$link);
mysql_query('set names utf-8');
$query_sql = "select * from mark";
$result = mysql_query($query_sql);
$data = array();
while($row = mysql_fetch_assoc($result)){
$data[] = $row;
}
echo "<pre>";
print_r($data);
