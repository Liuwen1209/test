<?php 
/**
* 注册信息验证（连接数据库）
*/
session_start();



	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$confirm=$_POST['confirm'];
	$dbhost = "localhost";
	$charset = 'utf8';
	$dbname = "userforP";	//数据库名称
	$dbuser = "root";		//数据库用户名
	$dbpass = "root";	//数据库密码
	$tbname = 'userforP'; 	//表格名
	if($pass!=$confirm)
	{    
		echo "<script>alert('两次输入密码不一致！');location='login.php';</script>";
	}
	else
	{	
		try
		{
			$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
			$sql = "INSERT INTO userforP.userforP(Uname,Upassword) VALUES(?,?)";//插入用户
			$stmt = $conn->prepare($sql);	//执行
			
					
			$stmt->bindValue(1,$user);//绑定参数
			$stmt->bindValue(2,$pass);
			$count = $stmt->execute();//执行预处理语句
			//if($count<>0)
			//{
				echo"<script type='text/javascript'>alert('注册成功');location='sign.php';</script>";  
			//}
			//else
			//{
			//	echo"<script type='text/javascript'>alert('注册失败,请使用其它用户名'); location='login.php';</script>";  
			//}
			$stmt = null;//释放
			$conn = null; // 关闭连接
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
		}
	}
	
?>