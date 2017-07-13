<?php 
/*
	文件句柄操作
*/
//fopen(文件路径，模式),返回文件资源
/*
	模式：r:只读，指针在文件头
*/
$file = fopen('./test.php','r');
var_dump($file);
echo '<hr>';

//fread（资源，读取长度），返回字符串
echo fread($file,5);//如果是中文，注意3个字节1一个汉字，如果不全，返回？（问号）
echo '<hr>';

//fwrite(资源，写入字符串)
echo fwrite($file,'123');//0，写入0个长度，因为模式是只读

//fclose(资源)：关闭句柄
fclose($file);
var_dump($file);

