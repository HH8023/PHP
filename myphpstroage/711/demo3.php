<?php 
/*
	错误的配置
*/
//echo $a;
//var_dump();
//test();

/*
	错误配置函数
	
	error_reporting([可选的错误级别])：不传级别，返回当前的级别，传级别进行设置，注意：只有本次有效
*/
//获取当前错误级别
echo error_reporting();
echo $a;
echo '<hr>';

//设置错误级别
error_reporting(1);//此时的几倍是E_ERROR；除了E_ERROR之外，其他级别错误不显示
echo $a;
echo '<hr>';
