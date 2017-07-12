<?php 
/*
	目录句柄操作相关函数
*/
//opendir()  打开目录句柄，返回资源
/*
	资源类型，本身存在的东西，需要的时候直接拿过来用，这种东西就是资源
*/
$handle = opendir(__DIR__);
var_dump($handle);
echo '<hr>';

//readdir
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';
echo readdir($handle),'<hr>';

//rewinddir()  重置目录指针到开头
rewinddir($handle);
echo readdir($handle);

//closedir();
closedir($handle);
var_dump($handle);







