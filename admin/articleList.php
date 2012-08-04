<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章管理</title>
</head>
<?php
/*连接数据库*/
include ("../conn.php");
/*读Article表*/
$result=mysql_query("select * from wxf_article ORDER BY articleId desc");
?>
<body>
<table width="600" border="1">
  <tr>
    <td>编号</td>
    <td>标题</td>
    <td>栏目</td>
    <td>操作</td>
  </tr>
<?php
  while($row=mysql_fetch_array($result))
  {
	echo '<tr><td>';
	echo $row["articleId"];
	echo '</td><td>';
	echo'<a href="editContent.php?articleId=';
	echo $row['articleId'];
	echo '&title=';
	echo $row['title'];
	echo'">';
	echo $row["title"];
	echo'</a></td><td>';
	$sortpath=$row['sortPath'];
	$result1=mysql_fetch_array(mysql_query("select sortpath,className from  wxf_class where sortpath='$sortpath'"));
	echo $result1['className'];
    echo'</td><td><a href="op/delArticle.php?articleId=';
	echo $row['articleId'];
	echo'">删除</a></td>';
  echo '</tr>';
	  
	  }
?>  
</table>

</body>
</html>