<?php
/**
* 注册页面
*/
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link href="C.css" rel="stylesheet" type="text/css" />
	</head>
	<style type="text/css">
		body {
				background-image: url(student.jpg);
				background-size: 100%;
		}
		.box{
			width: 215px;
			margin: 180px auto;
			
		}
		.inputBox{
			width:200px;
		}
	</style>
 <body>
		<div class="box"> 
		<h2>注册</h2>
		<!--将用户输入的user,和pass提交到login.php-->
		<form action="login_data.php" method="post" enctype="multipart/form-data">
			<div class="inputBox"><label>账号:</label><input type="text" name="user" value="" required="required"
				placeholder=   "            请输入您的学号" pattern="[0-9]{10}" title="账号号为10为数字"></div>
			<div class="inputBox"><label>密码:</label><input type="password" name="pass" value=""required="required"
				placeholder="            请输入您的密码"></div>
			<div class="inputBox"<label>确认密码:</label><input type="password" name="confirm" value=""required="required"
				placeholder="            请重复您的密码"></div>
			<input type="submit" name="submit" value="确认注册">
			<input type="button" onclick="window.location.href='sign.php'" value="返回登陆">
			
		</form>
		</div>
	</body>
</html>
