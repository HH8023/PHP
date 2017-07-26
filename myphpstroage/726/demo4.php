<?php 
//事务处理
try
{
	$name = 'root';
	$pwd = 'root';
	$option = [PDO::ATTR_AUTOCOMMIT=>0,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=php190;charset=utf8',$name,$pwd,$option);
}catch (PDOException $e)
{
	die('没连上');
}


try
{
	$pdo->beginTrabsaction();
	$sql = 'insert into user(name) value("马1234")';
	$res = $pdo->exec($sql);
	if(!$res){
		throw new Exception('添加失败');
	}
	$sql2 = 'update user set age=123 where id=1';
	$res2 = $pdo->exec($sql2);
	
	if(!$res2){
		throw new Exception('更新失败');
	}
	$pdo->commit();
}catch(Exception $e)
{
	echo $e->getMessage();
	$pdo->rollBack();
}
