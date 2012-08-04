<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['title'];?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/reset-min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script>
   
	/*判断sideNav与mainContent2个层，取最大高度，保证显示效果*/
	$(document).ready(function(){
		 var heightDiv=($("#wxf_mainContent").height());
		 var heightDiv2=($("#wxf_sideNav").height());
		if(heightDiv>heightDiv2)
		{
			$("#wxf_sideNav").height(($("#wxf_mainContent").height()));
		}
		else
		{
				$("#wxf_mainContent").height(($("#wxf_sideNav").height()));
		}
	 



	

});
</script>
</head>
<?php
/*连接数据库*/
include ("conn.php");
/*读Article表，按分类路径排列，方便下面的建目录树*/
$result=mysql_query("select * from wxf_article order by sortPath");
?>
<body id="wxf_bg">
<div id="wxf_warapper">
     <?php include ('inc/head.php');?>
    <div id="wxf_body">
    	<ul id="wxf_sideNav">
        	<li style="font-size:16px;font-weight:bold; text-align:center; background-color:#999; color:#FFF; margin-bottom:10px;">课程表</li>
        	<?php
$sortGet=$_GET['sortPath'];
/*遍历，建目录树*/
while($row=mysql_fetch_array($result)){
		if($row['sortPath']==$sortGet){
			$title=$row['title'];
			echo '<li style="font-size:12px;margin-top:2px;">';
		echo '<a ';
		if($title==$_GET['title']){
				echo 'color:#000;';
			}
		echo 'href="show.php?title=';
		echo $title;
		echo'&sortPath=';
		echo $sortGet;
		echo'">';
			echo $title;
			echo'</a></li>';}
		
}
?>
        </ul>
    	<div id="wxf_mainContent">
		<?php
		$titleGet=$_GET["title"];
		if($titleGet==NULL)
		{echo '<h1 style="font-size:20px;line-height:50px;height:400px;">提示：请选择左边的课程表进行学习</h1>';}
		else{
		$result1=mysql_query("select * from wxf_article");
		while($row1=mysql_fetch_array($result1))
		{
		if($row1['title']==$titleGet)
		 {echo $row1['content'];}
		 
		 }
		}
		 ?>
        </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>