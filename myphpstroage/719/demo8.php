<?php
/* 
	自动加载类
	__autoload()
 */
 /* 
	常规做法：挨个require,每次用到都需要require一次，如果类很多，那么就好麻烦。能否自动引入呢？可以
 */
// require './Test.class.php';
// require './Tt.class.php';
// $test = new Test();
// $test->say();

// $tt = new Tt();
// $tt->say();

/* 
	自动引入方法1：
	__autoload()函数，不属于某个类，而是在php文件开头定义，
	在函数内部可以对路径进行判断，如果有，引入，没有，返回错误提示。
 */
// function __autoload($class)
// {
	// if (file_exists('./' . $class . '.class.php')) {
		// require './' . $class . '.class.php';
	// } else {
		// echo $class, '类不存在';
	// }
// }

// /* 
	// 当前文件下没有Test类，如果成功，表名自动引入了
 // */
// $test = new Test();
// $test->say();
// echo '<hr>';

// // $hehe = new H();不存在，报致命错误
// // $hehe->say();
// echo '<hr>';

/* 
	方法2：
	spl_autoload_register()--推荐

 */
function req($class)
{
	if(file_exists('./' . $class . '.class.php')) {
	 require './' . $class . '.class.php';
	} elseif ('./a/' . $class . '.class.php') {
		require './a/' . $class . '.class.php';
	} else {
		echo '类不存在';
	}
}



spl_autoload_register('req');

$test = new Test();
$test->say();

$tt = new Tt();
$tt->say();


$up = new Upload();
$up->say();
