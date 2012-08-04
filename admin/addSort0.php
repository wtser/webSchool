<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
$sortPath=$_GET["sortPath"];
?>
<body>
<form action="op/addSort0.php?sortPath=<?php echo $sortPath;?>" method="post">
<input name="sortName" type="text"  onfocus="if (this.value == '请输入一级分类') {this.value = '';}" onblur="if (this.value == '') {this.value = '请输入一级分类';}" value="请输入一级分类" />
<input name="" type="submit" value="提交" />
</form>
</body>
</html>