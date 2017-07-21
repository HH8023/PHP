<?php 
/*
	命名空间，就是文件系统在oop中的应用
	定义：namespace
*/
/*
	以文件系统的方式理解
*/
/*
\	全局空间
|---var_dump.xxx  全局系统，系统自定义的
|---in_array.xxx
|---\A
|---|---var_dump.xxx 自定义空间的，自己定义的，所以不会冲突	
*/

namespace A;
function var_dump()
{
	echo 123;
}
var_dump();
echo __NAMESPACE__;//A,表示是A命名空间下

