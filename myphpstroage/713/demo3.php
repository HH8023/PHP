<?php 
/*
	a:写，追加写，创建写
	
	a+
*/
//追加写
$file = 'tt.php';
$handle = fopen($file,'a');
var_dump(fread($handle,10));
echo '<hr>';

echo fwrite($handle,date('Y-m-d H:i:s')."都会成功\n");
echo '<hr>';

//创建写
$file = 'a.php';
$handle = fopen($file,'a');
echo fwrite($handle,date('Y-m-d H:i:s')."好好学\n");
echo '<hr>';

/*
	a+ :读写，追加写，创建写
*/
$file = 'a.php';
$handle = fopen($file,'a+');
var_dump(fread($handle,20));







