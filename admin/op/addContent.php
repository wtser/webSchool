
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
/*页面传递参数*/
$sortPath=$_GET['sortPath'];
$title=$_POST['title'];
$content=$_POST['elm5'];
/*数据库连接*/
include ("../../conn.php");
mysql_query("insert into wxf_article (sortPath,title,content) values('$sortPath','$title','$content')");
Header("Location:../articleList.php");

?>

