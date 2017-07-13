<?php 
/*
	模式
	r+:读写，指针在文件头。覆盖写
*/
$file = 'test.php';
$handle = fopen($file,'r+');

echo fwrite($handle,'12345');
fclose($handle);
echo '<hr>';

/*
	w:写，清空写，创建写
*/
//清空写
$file = 'test.php';
$handle = fopen($file,'w');
echo fwrite($handle,'呵呵');
echo '<hr>';

//创建写
$file = 'tt.php';
$handle = fopen($file,'w');
echo fwrite($handle,'哈哈你来了');
echo '<hr>';

rewind($handle);
var_dump(fread($handle,10));//空字符串，因为模式不对

//w+:读写，同样也是清空写，创建写，和w一样，不过可以读。读的时候要注意，留神指针位置
//写完立马读的时候要重置指针，rewind()  










