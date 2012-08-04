<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web技术在线教程</title>
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
$result=mysql_query("select * from wxf_testClass");
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
		{echo '<li style="font-size:12px;margin-top:2px;">';
				/*创建链接并传递sortpath和title参数*/
			echo '<a href="test.php?testClassNUm=';
			echo $row['testClassNUm'];
			echo'&testClass=';
			echo $row['testClass'];
			echo '">';
			echo $row['testClass'];
			echo'</a></li>';}
		
}
?>
        </ul>
    	<div id="wxf_mainContent">
 <center>       
 <script language="javascript">
<!--
function writeSwf(movie, width, height) {
  document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="' + width + '" height="' + height + '" ID="sf" VIEWASTEXT>');
  document.write('  <param name="movie" value="' + movie + '" />');
  document.write('  <param name="quality" value="high" />');
  document.write('  <param name="wmode" value="window" />');
  document.write('  <param name="allowScriptAccess" value="always" />');
  document.write('  <param name="allowFullScreen" value="true" />');
  document.write('  <embed src="' + movie + '" quality="high" name="sf" allowScriptAccess="always" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="' + width + '" height="' + height + '" />');
  document.write('</object>');
}
  writeSwf("test/<?php echo $_GET['testClass'];?>.swf", 640, 480);
</script>
</center>
<p align="center">无法显示？<a href="test/<?php echo $_GET['testClass'];?>.swf">请点击此处 </a></p>  
        </div>
        
     
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>