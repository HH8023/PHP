<?php 
/*
	pdo的使用
	new 一个pdo的对象
*/
$dsn = 'mysql:dbname=php190;host=localhost;charset=utf8';
$name = 'root';
$pwd = 'root';
$pdo = new PDO($dsn,$name,$pwd);
//$pdo = new PDO($dsn);
//echo '<pre>';
//var_dump($pdo);

/*
	2、准备sql语句
*/
$sql = "select * from user";

//3、执行sql语句
$res = $pdo->query($sql);
var_dump($res);

//4、查看结果
foreach($res as $v)
{
	var_dump($v);
	echo '<hr>';
}

//5、关闭数据库连接
$pdo = null;
