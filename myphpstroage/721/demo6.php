<?php
/*
	命名空间的访问
	1、非限定名称
	2、限定名称
	3、完全限定名称
*/
namespace A\B;
/*
	引入demo5文件
*/
require 'demo5.php';

const PI = 3.1415926;
function say()
{
	echo '这是A\B下的say方法<br>';
}
class Test
{
	public static function t()
	{
		echo '这是A\B下的test类中的t方法';
	}
}

//非限定名称，没有路径
echo PI;//3.1415926,A\B下面的
echo '<br>';
say();
echo '<br>';

//限定名称，部分路径
echo C\PI;//当前空间是A\B，会认为是A\B\C\PI,3.14
echo '<br>';
echo C\say();//当前空间是A\B，会认为是A\B\C\say
echo C\Test::t();//当前空间是A\B，会认为是A\B\C\Test::t()
echo '<hr>';

//完全限定名称，绝对路径
//注意：全局空间使用\表示
//echoC\date('Y-m-d H:i:s');//报错，。因为A\B\C下并没有date（）函数
echo \A\B\C\PI;
echo '<br>';
echo \A\B\C\Test::t();

echo '<hr>';

echo \date('Y-m-d H:i:s');//全局的，正常
echo __NAMESPACE__,'<br>';
echo date('Y-m-d H:i:s');//当前空间是A\B，并没有定义date（）函数为什么还能用
/*
	非限定名称，如果访问的是系统的常量或者函数，当前空间没有的话，会使用全局空间中的
*/
