<?php 
/*
	目录信息获取
*/
//getcwd()  返回当前的目录
echo getcwd();//返回的结果是本地绝对路径
echo '<hr>';

//scandir()   返回指定路径的文件和目录信息
echo '<pre>';
var_dump(scandir(__DIR__));


