<?php 
/*
	路径相关函数
*/
//basename()
echo basename(__FILE__),'<hr>';//文件的话返回文件名
echo basename(__DIR__),'<hr>';//目录的话返回目录名
echo '<hr>';

//dirname()
echo dirname(__FILE__),'<hr>';//返回目录路径
echo dirname(__DIR__),'<hr>';//返回除当前目录的其他目录路径
echo '<hr><pre>';

//pathinfo()  内容包含basename,dirname,extension,filename4个键值对
var_dump(pathinfo(__FILE__));//文件的话，会有后缀名，也就是说，这是一个获取文件后缀名的方法
var_dump(pathinfo(__DIR__));//目录的话，没有extension这个键值对








