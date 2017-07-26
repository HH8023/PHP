<?php
/*
	异常如何使用
	try{
		代码
	}catch(Exception $e)
	{
		错误处理
	}
*/
try
{
	$name = 'root';
	$pwd = 'root';
	$pdo = new PDO('mysql:host=localhost;dbname=php190;charset=utf8',$name,$pwd);
}catch(PDOException $e)
{
	//die,exit
	die('出问题了，你没连接上');
}

//2、准备sql语句
$sql = 'insert into user(name) value("123，呵呵")';

//3、执行并判断，对于增删改执行用exec
//对于查，用query
if($pso->exec($sql))
{
	echo '数据添加成功，id是:',$pdo->lastInsertId();
}else{
	echo '数据添加失败';
}
//4、释放连接
$pdo = null;