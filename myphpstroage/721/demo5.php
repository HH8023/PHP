<?php 
/*
	命名空间的访问
	1、非限定名称
	2、限定名称
	3、完全限定名称
*/
namespace A\B\C;
const PI = 3.14;
function say()
{
	echo '这是A\B\C下的say方法<br>';
}
class Test
{
	public static function t()
	{
		echo '这是A\B\C下的test类中的t方法<br>';
	}
}




