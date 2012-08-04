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
		//if($row['sortPath']=='0|68'){
		//break;}
		/*遍历走完0|1段*/
		if(($row['sortPath']!='0|69')&&($mark==1)){
			continue;}
		if(($row['sortPath']=='0|69')){
			$mark=0;continue;}
		else 
		{echo '<li style="font-size:12px;margin-top:2px;">';
				/*创建链接并传递sortpath和title参数*/
			echo '<a href="show.php?sortPath=';
			echo $row['sortPath'];
			echo'&title=">';
			echo $row['className'];
			echo'</a></li>';}
		
}
?>
        </ul>
    	<div id="wxf_mainContent">
        <!--通过编辑器制作的内容介绍页，有点小乱-->
<span style="font-family: Verdana, Arial, Helvetica, sans-serif; "></span>
<div id="w3school" style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<h1 style="margin-top: 15px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; font-size: 20px; font-family: 微软雅黑; ">
		XML 系列教程
	</h1>
	<blockquote>
		<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
			“当 XML（扩展标记语言）于 1998 年 2 月被引入软件工业界时，它给整个行业带来了一场风暴。有史以来第一次，这个世界拥有了一种用来结构化文档和数据的通用且适应性强的格式，它不仅仅可以用于 WEB，而且可以被用于任何地方。”
		</p>
		<p class="author" style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
			---《Designing With Web Standards Second Edition》, Jeffrey Zeldman
		</p>
	</blockquote>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
		<strong>在本系列教程中，我们为您提供全面的 XML 学习资源。</strong>
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
		<strong>请首先阅读下方的教程简介。也可以从左侧的菜单直接选择你需要的教程！</strong>
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XML
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XML 指扩展标记语言。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 XML 教程中，你将了解什么是 XML，以及 XML 与 HTML 之间的差异。同时你将学习如何开始在应用程序中使用 XML。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/xml/index.asp" title="XML 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XML</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XSL
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XSL 指扩展样式表语言。XSLT 指 XSL 转换。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在此教程中，你将学习如何使用 XSLT 将 XML 文档转换为其他文档，比如 XHTML。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/xsl/xsl_languages.asp" title="XSLT 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XSL</a>！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XSL-FO
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XSL-FO 指可扩展样式表语言格式化对象（Extensible Stylesheet Language Formatting Objects）
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 XSL-FO 教程中，您将学习如何使用 XSL-FO 对用于输出的 XML 文档进行格式化。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/xslfo/index.asp" title="XSL-FO 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XSL-FO</a>！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XPath
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XPath 是一门在 XML 文档中查找信息的语言。XPath 可用来在 XML 文档中对元素和属性进行遍历。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XPath 是 W3C XSLT 标准的主要元素，并且 XQuery 和 XPointer 同时被构建于 XPath 表达之上。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		因此，对 XPath 的理解是很多高级 XML 应用的基础。<a href="http://www.w3school.com.cn/xpath/index.asp" title="XPath 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XPath</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XLink 和 XPointer
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XLink 定义在 XML 文档中创建超级链接的标准方法。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XPointer 允许这些超级链接指向 XML 文档中的更多具体部分（片断）。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/xlink/index.asp" title="XLink 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XLink 和 XPointer</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			DTD
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				DTD（文档类型定义）的作用是定义 XML 文档的合法构建模块。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				它使用一系列的合法元素来定义文档结构。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/dtd/index.asp" title="DTD 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 DTD</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XML Schema
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XML Schema 是基于 XML 的 DTD 替代者。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XML Schema 描述 XML 文档的结构。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XML Schema 语言也称作 XML Schema 定义（XML Schema Definition，XSD）。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在此教程中，你将学习如何在应用程序中读取和创建 XML Schema 语言，XML Schema 为何比 DTD 更加强大，以及如何在您的应用程序中使用 XML Schema。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/schema/index.asp" title="Schema教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XML Schema</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			DOM
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				XML 文档对象模型定义访问和操作XML文档的标准方法。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				DOM 将 XML 文档作为一个树形结构，而树叶被定义为节点。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/xmldom/index.asp" title="XML DOM 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 DOM</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XForms
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			XForms 是下一代的 HTML 表单。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 XForms 教程中，您将学习如何在应用程序中开始应用 XForms。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/xforms/index.asp" title="XForms 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 XForms</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			SOAP
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			SOAP 是一种简单的基于 XML 的协议，它使应用程序通过 HTTP 来交换信息。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 SOAP 教程中，你将了解到什么是 SOAP，以及它如何在应用程序之间交换信息。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/soap/index.asp" title="SOAP 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 SOAP</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			WSDL
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			WSDL（网络服务描述语言，Web Services Description Language）是一门基于 XML 的语言，用于描述 Web Services 以及如何对它们进行访问。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/wsdl/index.asp" title="WSDL 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 WSDL</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			RDF
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				资源描述框架 (RDF) 是描述网络中资源的 W3C 标准。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				RDF 是一个框架，用来描述网络资源，诸如网页的标题、作者、修改日期、内容以及版权信息等。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/rdf/index.asp" title="RDF 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 RDF</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			RSS
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				通过使用 RSS，您可以有选择地浏览您感兴趣的以及与您的工作相关的新闻。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				通过使用 RSS，您可以把需要的信息从不需要的信息（兜售信息，垃圾邮件等）中分离出来。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				通过使用 RSS，您可以创建自己的新闻频道，并将之发布到因特网。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/rss/index.asp" title="RSS 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 RSS</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			WAP
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				WAP 协议被设计为用来在诸如移动电话之类的无线客户端上展示因特网内容。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				WML 是用来创建供 WAP 浏览器显示的页面的语言。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在我们的 WAP 教程，你将学习关于 WAP 和 WML 的知识。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		你将学习如何将网页转换为袖珍的格式（pocket format），这样你的信息就可以被诸如移动电话之类的无线客户端访问到。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="http://www.w3school.com.cn/wap/index.asp" title="WAP 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习WAP / WML</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			Web Services
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				Web Services 可以将应用程序转换为网络应用程序。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				Web Services 可以被其他应用程序利用。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				基本的 Web Services 平台是 XML+HTTP。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在本教程中，我们把一个 ASP.NET 程序转换为了 Web Services。<a href="http://www.w3school.com.cn/webservices/index.asp" title="Web Services教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 Web Services</a>&nbsp;！
	</p>
</div>
        </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>