<?php 
/*
	如果非要在一个文件中使用多个空间，还可以使用花括号把空间括起来，
	多个空间之间不影响
*/
namespace A\B\C//子命名空间
{
	$a = 1;
	echo $a,'<br>';
}

namespace B\C\D
{
	$a = 2;
	echo $a,'<br>';
}

