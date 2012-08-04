<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web技术在线教程</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/reset-min.css" rel="stylesheet" type="text/css" />

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
    	<ul id="wxf_sideNav" style="height:auto;">
        	<?php
/*遍历，建目录树*/
while($row=mysql_fetch_array($result)){
        /*如果是一级目录*/
		if($row['parentId']==0){
			echo'<li style="font-size:12px;font-weight:bold;">';
		echo $row['className'];
		echo'</li>';}
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
     <!-- <input type="button" id="showMore" value="更多"  onclick="this.style='fuck'"/>-->
    	<div id="wxf_mainContent">
        	<div class="wxf_mainContentItemFirst">
            	<h1>领先的 Web 技术教程</h1>
            	
              <p style="margin-top:10px;">在这里，你可以找到你所需要的所有的网站建设教程。</p>
                <p style="margin-top:5px;">从基础的HTML到XHTML，乃至进阶的XML、SQL、数据库、多媒体和WAP。</p>
	<h3>从左侧的菜单选择你需要的教程！</h3>

            </div>
            
        	<div class="wxf_mainContentItem" style="margin-top:10px;">
            <img   src="image/book.png"/>
            	<h3>完整的网站技术参考手册</h3><br /><br />
                <p>我们的参考手册涵盖了网站技术的方方面面。</p>
                <p>其中包括W3C的标准技术：HTML、XHTML、CSS、XML 。以及其他的技术，诸如JavaScript、PHP、ASP、SQL等等。</p>
            </div>
            
            <div class="wxf_mainContentItem">
            <img  src="image/todo.png" />
            	<h3>在线测试工具</h3><br /><br />
                <p>每个栏目提供一个测验。</p>
                <p>通过使用我们的测验，你可以了解自己的不足，并对不足之处及时进行掌握。</p>
            </div>
            
            <div class="wxf_mainContentItem">
            <img  src="image/search.png" />
            	<h3>快捷易懂的学习方式</h3><br /><br />
                <p>一寸光阴一寸金，因此，我们为您提供快捷易懂的学习内容。</p>
                <p>在这里，您可以通过一种易懂的便利的模式获得您需要的任何知识。</p>
            </div>
            
            
            
            
            
      </div>
        
        
    </div>
    <?php include ('inc/foot.php');?>
</div>
</body>
</html>