<?php
/* 
	重写要求2：
	参数数目必须一致
 */
class Test
{
	public function say($a)
	{
		echo $a;
	}
}

class T extends Test
{
	public function say()//少参数
	{
		echo 'hello';
	}
}

class T1 extends Test
{
	public function say($a, $b)//多参数
	{
		echo 'hello';
	}
}

class T2 extends Test
{
	public function say($b)//参数数目一致，没错
	{
		echo 'hello';
	}
}
