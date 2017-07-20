<?php
/* 
	对象的序列化
 */
class Test
{
	public $a;
	protected $b;
	private $c;
	
	public function __construct($a, $b, $c)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	
	public function say()
	{
		echo 'hello';
	}
}

$t = new Test('a','什么啊', 3.14);
var_dump($t);
echo '<br>';
$str = serialize($t);
echo $str;
echo '<hr>';

// var_dump(unserialize($str));
/* 
	存入文件，换另外的方式读取
 */	
file_put_contents('obj.txt', $str);