<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$adminName=$_POST['adminName'];
$adminPwd=$_POST['adminPwd'];
/*连接数据库*/
include ("../conn.php");
/*读Article表，按分类路径排列，方便下面的建目录树*/
$result=mysql_fetch_array(mysql_query("select * from wxf_admin where adminName='$adminName'"));
if($result['adminName']==NULL)
	echo'用户名不存在';
else if($result['adminPwd']!=md5($adminPwd))
	echo'密码错误';
else Header("Location:admin.php");
?>
</body>
</html>