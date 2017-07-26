<?php
/* 
	预处理
 */
try
{
	$name = 'root';
	$pwd = 'root';
	$option = [];
	$pdo = new PDO('mysql:host=localhost;dbname=php190;charset=utf8', $name, $pwd, $option);
} catch(PDOException $e)
{
	echo '出错了';
	echo $e->getMessage();
	die;
}

/* 
	准备sql语句
	定义好模版
 */
//$st = $pdo->prepare('insert into user(name) value(?)');//把定义好的模版赋值给变量作为stament对象
$st = $pdo->prepare('insert into user(name,age, sex) value(:name,:age,:sex)');

/* 
	绑定
 */
$name = '张三311';
$age = '22';
$sex = '1';
// $st->bindParam(':name', $name);
// $st->bindParam(':age', $age);
// $st->bindParam(':sex', $sex);
$st->bindParam(1, $name);
$st->bindParam('2', $age);
$st->bindParam('3', $sex);

/* 
	提交
 */
$st->execute();