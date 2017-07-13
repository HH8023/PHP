<?php
/* 
	分析：
	1.需要知道是否是闰年
	2.判断月的天数
	3.判断1号星期几
	4.判断周数
 */
// var_dump($_POST);
//1.判断信息是否为空
if (empty($_POST['year']) || empty($_POST['month'])) {
	header('location:rili.php');
	die;
}

$year = $_POST['year'];
$month = $_POST['month'];
$er = '';
//2.判断是否是闰年 1900平年 2016闰年
if ($year%4 == 0) {
	if ($year%400 == 0 && $year%4 ==0) {
		$er = 29;
	} else {
		$er = 28
	}
} else {
	$er = 28;
}