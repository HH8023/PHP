<?php 

/*
	构造函数：特点：对象销毁时自动调用，不需要参数，没有返回值
	格式：
	public function __destruct()
	{
		操作
	}
*/
class Test
{
	public function __construct()
	{
		echo '构造函数被调用<br>';
	}
	
	public function __destruct()
	{
		echo '析构函数被调用<br>';
	}
}
$t1 = new Test();
$t2 = new Test();

//对象的销毁，方法:把null赋值给对象，对对象进行销毁
$t1 = null;
echo 123,'<br>';

