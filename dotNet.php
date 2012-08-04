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
		if($row['sortPath']=='0|41'){
		break;}
		/*遍历走完0|1段*/
		if(($row['sortPath']!='0|40')&&($mark==1)){
			continue;}
		if(($row['sortPath']=='0|40')){
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
		.NET(dotnet) 教程
	</h1>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; line-height: 18px; ">
		<strong>从左侧的菜单选择你需要的教程！</strong>
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			Microsoft.NET
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			Microsoft .NET 是微软新的因特网战略。
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在你完成对本教程的学习之后，你将了解什么是 .NET。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		同时你会认识到：.NET 将会影响未来创建 WEB 应用程序的方式。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|40|54&title=" title="Microsoft.NET 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习Microsoft.NET！</a>
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			ASP.NET
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				ASP.NET 是 ASP（微软动态服务器网页技术）的最新版本.
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				ASP.NET 是 Microsoft.NET 框架的组成部分，同时也是创建动态交换网页的强有力的工具。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|40|55&title=" title="ASP.NET 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 ASP.NET</a>&nbsp;！
	</p>
</div>
<div style="width: 607px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; border-right-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(170, 170, 170); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(170, 170, 170); ">
	<dl style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
		<dt style="font-weight: bold; font-size: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			.NET Mobile
		</dt>
		<dd style="color: rgb(0, 0, 136); margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				.NET Mobile 是微软 ASP.NET 和微软的 .NET 框架的一个扩展。
			</p>
			<p style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">
				.NET Mobile 是一套针对诸如 web 电话和 PDA 来构建应用程序的服务器端 Web 窗体控件（Web Forms Controls ）。
			</p>
		</dd>
	</dl>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		在本教程中，你将学习移动 .NET（.NET Mobile）。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		本教程的主要内容是：如何利用 .NET 框架的扩展来创建移动应用程序，这种扩展被称为微软移动因特网工具包（MMIT）或者简易 .NET Mobile。
	</p>
	<p style="margin-top: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 18px; ">
		<a href="show.php?sortPath=0|40|56&title=" title=".NET Mobile 教程" style="text-decoration: underline; color: rgb(144, 11, 9); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; ">开始学习 .NET Mobile</a>&nbsp;！
	</p>
</div>
        </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>