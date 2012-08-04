
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
/*页面传递参数*/
$articleId=$_GET['articleId'];
/*数据库连接*/
include ("../../conn.php");
mysql_query("DELETE FROM wxf_article where articleId='$articleId'");
Header("Location:../articleList.php");
?>