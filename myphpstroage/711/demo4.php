<?php 
/*
	临时修改配置文件的方法
	ini_get()
	ini_set()
*/
//ini_get();
echo ini_get('error_reporting'),'<br>';//32767
var_dump(ini_get('short_open_tag'));
echo '<br>';
echo ini_get('precision'),'<hr>';//14
echo '<hr>';

/*
	ini_set():临时修改配置文件，只有本次有效
*/
echo $a;
echo '<hr>';

ini_set('error_reporting',1);//临时设置级别只报E_ERROR级别的错误
echo $a;

