<?php
/* 
	后台用户控制器
 */
class User
{
	public function showUserAdd()
	{
		// require '../../view/admin/showIndex.html';//注意：不是从控制器的目录算起
		
		require './view/admin/user/showUserAdd.html';
	//echo 123;
	}
	
	/*
	*用户添加页面
	*
	*@param  	需要传的东西
	*@return  
	*/
	public function doUserAdd()
	{
	//	var_dump($_POST);
		//echo '用户添加提交到这';
		//信息判断
		//如果有其中之一没有写，就不让跳转。
		if(empty(trim($_POST['username'])) || empty(trim($_POST['pwd'])) || empty(trim($_POST['repwd']))){
			header('location:admin.php?c=user&a=showUserAdd');
			die;
		}
		//用户名的检测
		//$preg = '/^\w{6,12}$/';
	//	$this->isUserName($_POST['username']);
		
		/*判断密码的一致，
		*header里面是重新返回url地址在判断完3秒之后。
		*/
		if($_POST['pwd'] !== $_POST['repwd']){
			echo '密码不一致，重写';
			header('refresh:3,url=admin.php?c=user&a=showUserAdd');
			die;
		}
		
		//入库操作:字段准备
		$name = $_POST['username'];
		$pwd = md5($_POST['pwd']);
		$nickname = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'),0,10);
		$auth = $_POST['level'];
		
		//准备sql语句
		$sql = "insert into user(name,pwd,nickname,auth) value('{$name}','{$pwd}','{$nickname}',{$auth})";
		//echo $sql;//测试有没有输出sql语句；
		$user = new Model();
		//var_dump($user);
		//插入数据并判断
		if($user->add($sql)){
			header('localhost:admin.php?c=user&a=showUserList');
		} else {
			echo '用户名重名，请修改后重新添加';
			header('refresh:3,url=admin.php?c=user&a=showUserAdd');
			die;
		}		
	}
	
	/**
	*用户列表显示
	*
	*
	*/
	public function showUserList()
	{
		//var_dump($_POST);
		//判断是否有查询信息 来确定分页的查询语句
		if (isset($_REQUEST['search'])) {
		    $sql = "select count(*) from user where name like '%{$_REQUEST['search']}%'";
		} else {
		    $sql = "select count(*) from user";
		}
		$search = isset($_REQUEST['search']) ? $_REQUEST['search'] : '';
		
		//获取分页信息
		$user = new Model();
		//$sql = "select count(*) from user";
		$count = $user->getNum($sql);
		//echo $count;die;
		$now = isset($_GET['page']) ? $_GET['page'] : 1;
		$page = new Page($now,$count,5);//5的意思是每页显示5条数据
		
		
		//var_dump($page);
		//die;
		
        //获取user表所有用户信息
		//echo '用户列表';
	//	$user = new Model();
	    
	    if (isset($_REQUEST['search'])) {
		     $sql = "select * from user where name like '%{$_REQUEST['search']}%' limit {$page->start},{$page->offset}";
		} else {
			$sql = "select * from user limit {$page->start},{$page->offset}";
		}
		
		$users = $user->getAll($sql);
		require './view/admin/user/showUserList.html';
	}
	
	/**
	*用户状态修改
	*
	*
	*/
	public function doUserStatusEdit()
	{
		//准备字段
	    $status = $_GET['status'] ? 0 : 1;//状态只有2个，原来是0，就变为1，原来是1，就变为0
		$uid = $_GET['uid'];
	    //准备sql
		$user = new Model();
		$sql = "update user set status={$status} where id={$uid}";
		//更新
		$user->update($sql);
		header('location:admin.php?c=user&a=showUserList');
		
	}
	/**
	*用户编辑页面
	*
	*
	*/
	public function showUserEdit()
	{
	    //echo 123;
	    $uid = $_GET['uid'];
		$user = new Model();
		$sql = "select name,auth from user where id={$uid}";
		$userInfo = $user->getOne($sql);
		//echo '<pre>';
		//var_dump($userInfo);
		//die;
		require './view/admin/user/showUserEdit.html';
		
	}
	/**
	*用户编辑操作
	*
	*
	*/
	public function doUserEdit()
	{
	   // var_dump($_POST);
		//die;
	    //信息判断
		//如果有其中之一没有写，就不让跳转。
		if(empty(trim($_POST['pwd'])) || empty(trim($_POST['repwd']))){
			header("location:admin.php?c=user&a=showUserEdit&uid={$_POST['uid']}");
			die;
		}

		/*判断密码的一致，
		*header里面是重新返回url地址在判断完3秒之后。
		*/
		if($_POST['pwd'] !== $_POST['repwd']){
			echo '密码不一致，重写';
			header("refresh:3,url=admin.php?c=user&a=showUserEdit&uid={$_POST['uid']}");
			die;
		}
		
		//入库操作:字段准备
		$uid = $_POST['uid'];
		$pwd = md5($_POST['pwd']);
		$auth = $_POST['level'];
		
		//准备sql语句
		$sql = "update user set pwd='{$pwd}',auth={$auth} where id={$uid}";
		//echo $sql;die;
		//echo $sql;//测试有没有输出sql语句；
		$user = new Model();
		//var_dump($user);
		//插入数据并判断
		if($user->update($sql)){
			header('location:admin.php?c=user&a=showUserList');
		} else {
			echo '编辑失败，请修改后重新编辑';
			header("refresh:3,url=admin.php?c=user&a=showUserEdit&uid={$_POST['uid']}");
			die;
		}
	}
	
	
	
	
	/*
	*用户名合法性的检测
	*@param  string 用户名
	*@return bool不合法时，跳转到添加页面
	*/
	private function isUserName($username)
	{
		$preg = '/^\w{6,12}$/';
		if(!preg_match($preg,$username)){
			echo '用户名不规范';
			header('refresh:3,url=admin.php?c=user&a=showUserAdd');
			die; 
		}
	}
	
	
	
	
	
	
	
	
	
}