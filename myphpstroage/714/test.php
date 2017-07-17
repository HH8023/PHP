<?php 
/*
	如何接受提交过来的上传信息？
	使用$_FILES这个预定义超全局变量
*/
echo '<pre>';
var_dump($_FILES);

/*
	对上传文件的处理
	1、判断到底上传了没有，传成功了没有，根据错误号判断，可以直接判断非0为错，也可以挨个对非0 的值进行判断，都行
*/
if ($_FILES['pho']['error']){
	echo '图片有问题';
	header('refresh:3; url=demo1.php');
	die;
}

//2、对文件类型的判断，判断是否是允许的文件类型
$allowType = [
		'image/jpeg',
		'image/jpg',
		'image/png',
		'image/gif'
];

if (!in_array($_FILES['pho']['type'],$allowType)) {
	echo '不是允许的类型，重新传';
	header('refresh:3;url=demo1.php');
	die;
}

//3、判断大小
$allowSize = 1024*1024;//1MB
if($_FILES['pho']['size']>$allowSize){
	echo '太大了';
	header('refresh:3;url=demo1.php');
	die;
}

//4、判断是否是合法的上传，注意：判断的是临时文件名，而不是文件原名
if(!is_uploaded_file($_FILES['pho']['tmp_name'])){
	echo '兄弟，换个正常的方式来';
	header('refresh:3;url=demo1.php');
	die;
}

//5、对临时文献处理，移动到其他文件夹 move_uploaded_file（）
//sleep(5);
//5.1.后缀名截取
$ext = explode('.',$_FiLES['pho']['name']);
//var_dump($ext);多个键值对，最后一个可定是后缀名
$ext = '.'. array_pop($ext);
//echo  $ext;
//echo __DIR__;
//die;
if(move_uploaded_file($_FILES['pho']['tmp_name'],__DIR__.'\\'.date('YmdHis').rand(10000,99999).$ext)){
	echo '图片上传成功';
} else{
	echo '图片上传失败，请重新传';
	header('refresh:3;url=demo1.php');
	die;
}


