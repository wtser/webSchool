<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加文章</title>

<script type="text/javascript" src="../Js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="../xheditor/xheditor-1.1.7-zh-cn.min.js"></script>
<link href="../css/reset-min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" action="op/addContent.php?sortPath=<?php echo $_GET['sortPath'];?>">
标题：<input name="title" type="text" /><br /><br />
<textarea style="height:500px;width:650px;" id="elm5" name="elm5" class="xheditor {tools:'Bold,Italic,Underline,Strikethroug,|,Emot,Table,Img,Link,Unlink,|,Source,Fullscreen',skin:'default'}" rows="12" cols="80" > </textarea>
<script type="text/javascript">$('#elm5').xheditor({upLinkUrl:"upload.php?immediate=1",upLinkExt:"zip,rar,txt",upImgUrl:"upload.php?immediate=1",upImgExt:"jpg,jpeg,gif,png",upFlashUrl:"upload.php?immediate=1",upFlashExt:"swf",upMediaUrl:"upload.php?immediate=1",upMediaExt:"avi"});
</script>
   </p>
   <input name="" type="submit" value="提交" />
</form>
</body>
</html>