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
		if($row['sortPath']=='0|39'){
		break;}
		/*遍历走完0|1段*/
		if(($row['sortPath']!='0|38')&&($mark==1)){
			continue;}
		if(($row['sortPath']=='0|38')){
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
<span style="font-family: Verdana, Arial, Helvetica, sans-serif; "></span>
<div id="w3school" style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<h1 style="margin-top: 15px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; font-size: 20px; font-family: 微软雅黑; ">
		浏览器脚本系列教程
	</h1>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
		<strong>从左侧的菜单选择你需要的教程！</strong>
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			JavaScript
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				JavaScript 是属于网络的脚本语言！
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				JavaScript 是因特网上最流行的脚本语言。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		JavaScript 很容易使用！你一定会喜欢它的！<a href="show.php?title=JS%20教程&sortPath=0|38|42" title="JavaScript 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 JavaScript</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			HTML DOM
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				HTML DOM 定义了访问和操作HTML文档的标准方法。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				HTML DOM 把 HTML 文档呈现为带有元素、属性和文本的树结构（节点树）。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|43&title=" title="HTML DOM 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 HTML DOM</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			DHTML
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				DHTML 是一种使 HTML 页面具有动态特性的艺术。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				DHTML 是一种创建动态和交互 WEB 站点的技术集。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				对大多数人来说，DHTML 意味着 HTML、样式表和 JavaScript 的组合。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|44&title=" title="DHTML 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 DHTML</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			VBScript
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			VBScript是微软公司出品的脚本语言。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 VBScript 教程中，你可以学习如何编写 VBScript，以及如何在你的 HTML 文件中插入这些代码，以使得这些 WEB 页面动态性和交互性更强。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|45&title=" title="VBScript 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 VBScript</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			AJAX
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				AJAX 指异步 JavaScript 及 XML（Asynchronous JavaScript And XML）。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				AJAX 是一种在 2005 年由 Google 推广开来的编程模式。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				AJAX 不是一种新的编程语言，而是一种使用现有标准的新方法。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				通过 AJAX，你可以创建更好、更快以及更友好的 WEB 应用程序。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				AJAX 基于 JavaScript 和 HTTP 请求（HTTP requests）。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|46&title=" title="AJAX 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 AJAX</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			jQuery
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				jQuery 是一个 JavaScript 库。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				jQuery 极大地简化了 JavaScript 编程。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				jQuery 很容易学习。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|47&title=" title="jQuery 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 jQuery</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			E4X
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				E4X 是对 JavaScript 的新扩展。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				E4X 向 JavaScript 添加了对 XML 的直接支持。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				E4X 是正式的 JavaScript 标准。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|48&title=" title="E4X 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 E4X</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			WMLScript
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				WMLScript 是用于 WML 页面的脚本语言。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				WML 页面可以在 WAP 浏览器中显示。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				WMLScript 用于验证用户输入、生成对话框、显示出错消息以及访问用户代理设备等等。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|38|49&title=" title="WMLScript 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 WMLScript</a>&nbsp;！
	</p>
</div>
        </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>