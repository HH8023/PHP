<?php 
/*
	目录的新建&删除
*/
//mkdir()  创建目录

if(!file_exists('test')){
	if(mkdir('test')){
		echo '创建成功';
	}else{
		echo '创建失败';
	}
}else{
	echo '目录存在';
	rmdir('test');//删除的目录是永久删除，不会删除到回收站
}

/*
	检测目录是否存在
	file_exists()
	is_dir()
*/

if(is_dir('test')){
	echo 'test是一个目录';
}else{
	echo 'test不是一个目录';
}
echo '哈哈';









