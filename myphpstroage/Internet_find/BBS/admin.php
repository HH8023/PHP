<?php
/* 
	后台入口文件
 */
function __autoload($class)
{
	if (file_exists('./controller/admin/' . $class . '.class.php'))
	{
		require_once './controller/admin/' . $class . '.class.php';
	} else if (file_exists('./model/'.$class.'.class.php'))
	{
		require_once './model/'.$class.'.class.php';
	} else if (file_exists('./vender/'.$class.'.class.php'))
	{
		require_once './vender/'.$class.'.class.php';
	} else {
		die('你要的类我没有');
	}
}
define('ADMIN_ROOT', './public/admin/');
$controller = !empty($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
$action = !empty($_GET['a']) ? $_GET['a'] : 'showIndex';

$class = new $controller();
$class->$action();