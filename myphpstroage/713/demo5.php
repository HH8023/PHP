<?php 
/*
	文件内容读取
	file_get_contents()
*/
echo file_get_contents('a.php');
echo '<hr>';

/*
	file_put_contents()  写入信息，覆盖写
*/
echo file_put_contents('a.php','&&&&&&&&&&&&&&&&');

echo file_get_contents('a.php');
echo '<hr>';

/*
	访问远程文件，
	需要在配置文件中开启allow_url_fopen，默认是开启
*/
//$handle = fopen('https://www.taobao.com','r');
//var_dump($handle);
//echo fread($handle,1024);

$str = file_get_contents('http://www.taobao.com');
echo strlen($str);
echo $str;











