<?php 
/*
	截取文件扩展名
	@pram：string $filename
	@return：string
*/
function getExt($filename){
	//$filename = '1.php';
	$ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	//echo $ext;
	return $ext;
}
echo getExt('1.php.html');

$filename = 'aa.html';
echo getExt($filename);








