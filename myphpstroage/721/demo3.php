<?php 
/*
	一个文件中允许存在多个命名空间，但是不推荐
*/
namespace A;
function say()
{
	echo '这是A空间的say方法';
	echo '<br>';
	echo '<br>';
	echo '<br>';
}
say();
//以上是A空间，以下是B空间
namespace B;
function say()
{
	echo '这是B空间的say方法';
}
say();



