<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 

$sortName=$_POST["sortName"];
?>
<?php
/*连接数据库*/
include ("../../conn.php");

/*插入数据*/
mysql_query("INSERT INTO wxf_class (className,parentId,orderId) 
VALUES ('$sortName', '0','0')");
/*获取主键最大索引*/
$nid=mysql_fetch_array(mysql_query("SELECT classId FROM wxf_class where parentId='0' ORDER BY classId desc"));
;
$maxId=$nid['classId']+1;
$sortPath='0|'.$maxId;
/*更新字段*/
mysql_query("UPDATE wxf_class SET sortPath = '$sortPath'
WHERE className='$sortName'");

Header("Location:../sortList.php");

?>