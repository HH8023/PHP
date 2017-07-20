<?php
/* 
	把demo3中序列化的内容，进行反序列化
 */
$str = file_get_contents('obj.txt');
echo $str, '<br>';


/* 
	要想在别的文件中，使用类，需要引入
 */
require 'demo3.php';

$obj = unserialize($str);
var_dump($obj);
echo '<hr>';
$obj->say();