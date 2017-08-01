<?php
/* 
	model类的封装
	数据库的方法，增删改查
 */
class Model
{
	protected $pdo;
	
	public function __construct(
								$host='127.0.0.1',
								$dbName='190bbs',
								$name='root', 
								$pwd='root',
								$option=[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
								)
	{
		
		try{
			$this->pdo = new PDO(
				"mysql:host={$host};dbname={$dbName};charset=utf8",$name, $pwd, $option);
		} catch(PDOException $e)
		{
			die($e->getMessage());
		}
		
		return $this->pdo;
		
	}
	
	
	/*
	 *增加操作
	 *
	 *@param sql
	 *@return int 添加成功的id或者失败的0
	 */
	 public function add($sql)
	 {
		 $res = $this->pdo->exec($sql);
		 return $this->pdo->lastInsertId();
	 }
	 
	 
	 
	 /*
	 *删除操作
	 *
	 *@param sql
	 *@return int 删除成功与否的受影响行数
	 */
	 public function del($sql)
	 {
		 $res = $this->pdo->exec($sql);
		 return $res;
	 }
	 
	 
	 /*
	 *修改操作
	 *
	 *@param sql
	 *@return int 修改成功与否的受影响行数
	 */
	 public function update($sql)
	 {
		 return $this->pdo->exec($sql);
	 }
	 
	/*
	 *查询所有操作
	 *
	 *@param sql
	 *@return array|bool 查询的结果，可能是数组也可能是false
	 */
	 public function getAll($sql)
	 {
		 $res = $this->pdo->query($sql);
		 return $res->fetchAll();
	 }
	 
	 /*
	 *查询单条信息的操作
	 *
	 *@param sql
	 *@return array|bool 查询的结果，可能是数组也可能是false
	 */
	 public function getOne($sql)
	 {
		 $res = $this->pdo->query($sql);
		 return $res->fetch();
	 }
	 
	 /*
	  *获取表中数据的数目
	  *
	  *@param sql
	  *@return int
	  */
	  public function getNum($sql)
	  {
		  $res = $this->pdo->query($sql);
		  return $res->fetch(PDO::FETCH_NUM)[0];
	  }
}
//$pdo = new Model();
// var_dump($pdo);
// $sql = 'insert into user(name) value("成功与否")';
// $sql = 'delete from user where id=145';
// $sql = 'update user set age=111 where id=152';
// $sql = 'select * from user where id>100';
//$sql = 'select count(*) from user where id>100';
//echo $pdo->getNum($sql);

