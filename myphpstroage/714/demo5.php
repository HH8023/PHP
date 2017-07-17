<?php 
/*
	强制下载
*/
$file = '3.gif';
$fileName = basename($file);
//echo $fileName;
header("Content-Type: image/gif");
header("Content-Disposition:attachment;fileName=". '"'.$fileName.'"');

header("Content-Length:".filesize($fileName));
readfile($fileName);

