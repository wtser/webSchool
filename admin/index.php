<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-登录</title>
<style type="text/css">
input {
	height:30px;
	font-size:20px;
	width:150px;
	border-radius:4px;
	color:#aaa;
}
</style>
</head>

<body style="background-color:#F6F9FB;">
<div style="width:913px; margin-left:auto; margin-right:auto;">
<img src="../image/logo_1.png" />
<div style="margin-top:150px; float:right;">
<form method="post" action="check.php">
<input name="adminName" type="text" value="用户名"  onfocus="if (this.value == '用户名') {this.value = '';}" onblur="if (this.value == '') {this.value = '用户名';}"  />
<input name="adminPwd" type="text" onfocus="if (this.value == '密码') {this.value = '';}"  onclick="this.type ='password';"onblur=" if (this.value == '') {this.value ='密码';this.type ='text';}" value="密码"  />
<input style="width:70px; height:35px; font-weight:bold; color:#FFF; border:#690  thin solid;  background-color:#9C3" type="submit" value="登录" />
</form>
</div>
</div>
</body>
</html>