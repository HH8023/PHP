<?php 
/*
	类的封装|访问的限制
	方法：
		public 
		protected
		private
		注意：修饰符只能修饰属性，方法，不能修饰类
*/
class Test
{
	public $a = 1;
	protected $b = 2;
	private $c = 3;
	
	public function say()
	{
		
	}
	protected function say1()
	{
		
	}
	private function say2()
	{
		
	}
}
$t1 = new Test();
var_dump($t1);
echo '<hr>';
echo $t1->a,'<br>';

//echo $t1->b,'<br>';//报错
$t1 ->say();//正常
//$t1->say1();//报错
$t1->say2();//报错




