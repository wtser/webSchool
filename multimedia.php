<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web技术在线教程</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/reset-min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script>
	$(document).ready(function(){
	 $("#wxf_sideNav").height(($("#wxf_mainContent").height()));

});
</script>
</head>
<?php
/*连接数据库*/
include ("conn.php");
/*读Article表，按分类路径排列，方便下面的建目录树*/
$result=mysql_query("select * from wxf_class order by sortPath");
?>
<body id="wxf_bg">
<div id="wxf_warapper">
     <?php include ('inc/head.php');?>
    <div id="wxf_body">
    	<ul id="wxf_sideNav">
        	<li style="font-size:16px;font-weight:bold; text-align:center; background-color:#999; color:#FFF; margin-bottom:10px;">课程表</li>
        	<?php
/*遍历，建目录树*/
$mark=1;
while($row=mysql_fetch_array($result)){
		/*到第三主菜单项为止*/
		if($row['sortPath']=='0|42'){
		break;}
		/*遍历走完0|1段*/
		if(($row['sortPath']!='0|41')&&($mark==1)){
			continue;}
		if(($row['sortPath']=='0|41')){
			$mark=0;continue;}
		else 
		{echo '<li style="font-size:12px;margin-top:2px;">';
						echo '<a href="show.php?sortPath=';
			echo $row['sortPath'];
			echo'&title=">';
			echo $row['className'];
			echo'</a></li>';}

		
}
?>
        </ul>
    	<div id="wxf_mainContent">

<div id="w3school" style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<h1 style="margin-top: 15px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; font-size: 20px; font-family: 微软雅黑; ">
		多媒体系列教程
	</h1>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
		<strong>从左侧的菜单选择你需要的教程！</strong>
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			Media
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			多媒体（Multimedia）指图片、声音、音乐、动画和视频。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在本教程中，您将学到如何向网页添加多媒体内容（音频和视频）。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|41|57&title=" title="多媒体教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习网络多媒体教程</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			SMIL
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			SMIL 是一种易学的、类似 HTML 的、描述视听内容的语言。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		您学习本教程后，将了解到什么是 SMIL，如何创建基于多媒体内容的页面，其中包含了音频、视频、图片、文本以及其他媒介类型。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|41|58&title=" title="SMIL 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 SMIL</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			SVG
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				SVG 意为可缩放矢量图形（Scalable Vector Graphics）。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				SVG 使用 XML 格式定义图像。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 SVG 教程中，你将学习 SVG 的相关知识。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|41|59&title=" title="SVG 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 SVG</a>&nbsp;！
	</p>

</div> 
        </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>