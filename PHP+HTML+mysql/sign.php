<?php
/**
* 登录页面
*/
session_start();
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta  charset="utf-8">
		<title>登录</title>
		<link href="C.css" rel="stylesheet" type="text/css" />
	</head>
	<style type="text/css">
		body {
				background-image: url(student.jpg);
				background-size: 100%;
		}
		.box{
			width: 210px;
			margin: 180px auto;
			
		}
		.b1{
			
		}
		.inputBox{
			height:50px;
		}
		
	</style>
 <body>
		<div class="box"> 
		<h2 class="b1">登录</h2>
		<form action="enter_data.php" method="post" enctype="multipart/form-data">
			<div class="inputBox">
				<label>学号:</label><input type="text" name="name" value="" required="required" placeholder=
					"           请输入您的学号" pattern="[0-9]{10}" title="学号为10为数字"></div>
			<div class="inputBox">
				<label>密码:</label><input type="password" name="password" value=""	required="required" placeholder=
					"           请输入您的密码"></div>
					
			<input type="submit" name="submit" value="登录">
			<input type="button" onclick="window.location.href='login.php'" name="submit" value="注册" >			
					
		</form>
		</div>
	</body>
</html>
