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
while($row=mysql_fetch_array($result)){
		if($row['sortPath']=='0|2'){
		break;}
		if($row['sortPath']=='0|1'){
			continue;
			/*echo'<li style="font-size:12px;font-weight:bold;">';
		echo $row['className'];
		echo'</li>';*/}
		else
		{echo '<li style="font-size:12px;margin-top:2px;">';
			echo'<a href="show.php?sortPath=';
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
		HTML 系列教程
	</h1>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
		<strong>从左侧的菜单选择你需要的教程！</strong>
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			HTML
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			HTML 指超文本标签语言。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		HTML 是通向 WEB 技术世界的钥匙。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在 W3School 的 HTML 教程中，您将学习如何使用 HTML 来创建站点。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		HTML 非常容易学习！你会喜欢它的！<a href="show.php?title=HTML 教程&amp;sortPath=0|1|3" title="HTML 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">现在开始学习 HTML</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XHTML
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XHTML 是更严谨更纯净的 HTML 版本。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在 W3School 的 XHTML 教程中，您将学习 HTML 与 XHTML 之间的差异，以及 XHTML 的优势所在。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		我们还将会为您展示将站点升级至 XHTML 的方法，以帮助您快速部署 XHTML 技术。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		XHTML 已经成为优秀前端设计师和工程师的首选。<a href="show.php?title=XHTML 首页&amp;sortPath=0|1|4" title="XHTML 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">现在开始学习 XHTML</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			HTML 5
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			HTML 5 是下一代的 HTML。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		HTML5 仍处于完善之中。然而，大部分现代浏览器已经具备了某些 HTML5 支持。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在 W3School 的 HTML 5 教程中，您将了解 HTML5 中的新特性。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?title=HTML 5 首页&amp;sortPath=0|1|15" title="HTML 5 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">现在就开始学习 HTML 5</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			CSS
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			CSS 指层叠样式表（Cascading Style Sheets）。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 CSS 教程中，您将学习如何使用 CSS 同时控制整个站点的样式和布局。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		通过与 XHTML 结合，CSS 可以帮助我们实行表现与结构分离的开发模式。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		通过使用 CSS 来提升工作效率！<a href="show.php?title=CSS 教程&amp;sortPath=0|1|16" title="CSS 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">现在开始学习 CSS</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			TCP/IP
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			TCP/IP 是针对因特网的通信协议。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在 W3School 的 TCP/IP 教程中，你将了解到什么是 TCP/IP，以及它如何工作。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		关于 TCP/IP 知识，有助于您理解互联网的运行原理，是您学习 WEB 技术的基础。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?title=TCP/IP 首页&amp;sortPath=0|1|17" title="TCP/IP 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">现在开始学习 TCP/IP</a>&nbsp;！
	</p>
</div> 
        </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>