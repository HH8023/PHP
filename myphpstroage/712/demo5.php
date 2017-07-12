<?php 
/*
	目录空间的统计
*/
/*
	dis_free_space() 返回当前逻辑磁盘可用的空间大小，返回字节数
*/
echo disk_free_space(__DIR__)/1024/1024/1024,'GB';
echo '<hr>';

/*
	disk_total_space()  返回当前逻辑磁盘的总空间大小，返回字节数
*/
echo disk_total_space(__DIR__)/1024/1024/1024,'GB';
echo '<hr>';

//filesize()  统计文件大小，返回的也是字节数
echo filesize('demo2.php'),'<hr>';
echo filesize('demo3.php'),'<hr>';

