<?php
$conn=mysql_connect("localhost","root","dmtds");
if(!$conn)
{
	die('无法连接数据库' . mysql_error());
	}
	/*选择数据库*/
	mysql_select_db("webschool",$conn);
	/*避免utf8编码错误*/
	mysql_query("set names utf8");
?>