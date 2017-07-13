<?php 
/*
	x:只能创建写
*/
$handle = fopen('ba.php','x');//文件存在，报错
echo '<hr>';

/*
	打开不存在的文件aa.php
*/
$handle = fopen('ba.php','x');
echo fwrite($handle,'123321');

