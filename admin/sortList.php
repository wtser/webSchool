<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类管理</title>
</head>
<?php
/*连接数据库*/
include ("../conn.php");
/*读Article表，按分类路径排列，方便下面的建目录树*/
$result=mysql_query("select * from wxf_class order by sortPath");
//$result1=mysql_query("select * from wxf_class where parentId=1");

?>
<body>
<ul>
<?php
/*遍历，建目录树*/
while($row=mysql_fetch_array($result)){
		if($row['parentId']==0){
				echo'<a href="addSort0.php?sortPath=';
		echo $row['sortPath'];
				echo'">+</a><br/>';
		echo $row['className'];
		echo'<a href="addSort.php?sortPath=';
		echo $row['sortPath'];
		echo'">+</a><br/>';}
		else
		{echo '|——';
			echo $row['className'];
			echo'<a href="addContent.php?sortPath=';
		echo $row['sortPath'];
				echo'">+</a><br/>';}
}
?>
</ul>
</body>
</html>