<?php 
/*
	文件时间相关函数
*/
//filectime()  文件创建时间
echo date('Y-m-d H:i:s',filectime('demo6.php')),'<br>';

//fileatime()   文件访问时间
echo date('Y-m-d H:i:s',fileatime('demo6.php')),'<br>';

//filemtime()  文件修改时间
echo date('Y-m-d H:i:s',filemtime('demo6.php')),'<br>';




