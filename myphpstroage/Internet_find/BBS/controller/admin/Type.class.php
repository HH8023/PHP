<?php
/*
	分区板块类
*/
class Type
{
	/*
	*分区添加页面
	*
	*@return void
	*/
	public function showTypeAdd()
	{
		//echo 123;
		require './view/admin/type/showTypeAdd.html';
		
	}
	
	
	/*
	*分区添加操作
	*
	*@return void
	*/
    public function doTypeAdd()
	{	
		//信息判断
		if (empty(trim($_POST['name']))) {
			header('location:admin.php?c=type&a=showTypeAdd');
			die;
		}
		
		//字段准备
		$type = new Model();
		$sql = "insert into type(name) value('{$_POST['name']}')";
		//添加并判断
		if ($type->add($sql)) {
		    header('location:admin.php?c=type&a=showTypeList');
		}else {
		    header('location:admin.php?c=type&a=showTypeAdd');
		}
		
	}
	
	public function showTypeList()
	{
	    //准备分页
		$type = new Model();
		$sql = "select * from type";
		$count = $type->getNum($sql);
		
		$now = isset($_GET['page']) ? $_GET['page'] : 1;
		$page = new Page($now,$count,10);
		
		//准备列表信息
		$sql = "select *, concat(path, '-', id)as newPath from type order by newPath limit {$page->start},{$page->offset}";
		$types = $type->getAll($sql);
		
		require './view/admin/type/showTypeList.html';
		
		
	}
	
}



