
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
/*页面传递参数*/
$articleId=$_GET['articleId'];
$title=$_POST['title'];
$content=$_POST['elm5'];
/*数据库连接*/
include ("../../conn.php");
mysql_query("update wxf_article set title='$title',content='$content' where articleId='$articleId'");
Header("Location:../articleList.php");
?>

