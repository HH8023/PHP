<?php 
//使用pdo的第四个参数，设置一些常见的属性
try
{
	$name = 'root';
	$pwd = 'root';
	$option = [PDO::ATTR_REFAULT_FETCH_MODE=>PDO::FETCH_NUM];//注意：一定是个数组
	//$option=[];
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=php190;charset=utf8',$name,$pwd,$option);
}catch(PDOException $e)
{
	die('错了');
}
//可以通过getAttribute(配置项的常量)来获取连接信息
echo $pdo->getAttribute(PDO::ATTR_DRIVER_NAME),'<br>';
echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION),'<br>';
echo $pdo->getAttribute(PDO::ATTR_ERRMODE),'<br>';
echo $pdo->getAttribute(PDO::ATTR_SERVER_INFO),'<br>';
echo $pdo->getAttribute(PDO::ATTR_SERVER_VERSION),'<br>';

/*
	也可以在pdo连接成功之后，使用setAttribute()来设置一些属性
	但是通常这些属性可以在pdo连接的时候就使用第四个参数来完成
*/
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$sql = 'select * from user where id<10';
$res = $pdo->query($sql);
var_dump(res);
echo '<br>';
foreach($res as $v)
{
	var_dump($v);
	echo '<br>';
}
