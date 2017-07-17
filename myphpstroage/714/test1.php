<?php 
//echo '<pre>';
//var_dump($_FILES);
//把三维数组变为2维数组
$files = $_FILES['pho'];
echo '<pre>';
var_dump($files);
echo '<hr>';

//把不规则的二维数组，变为规则的，和单文件一样的二维数组
for ($i = 0;$i < count($files['name']);$i++){
	$newFiles[$i]['name']=$files['name'][$i];
	$newFiles[$i]['type']=$files['type'][$i];
	$newFiles[$i]['tmp_name']=$files['tmp_name'][$i];
	$newFiles[$i]['error']=$files['error'][$i];
	$newFiles[$i]['size']=$files['size'][$i];
}
echo '<pre>';
var_dump($newFiles);




