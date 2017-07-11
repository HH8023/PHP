<?php  
/*
	元字符
	{n}
	{n,}
	{n,m}
*/
//{n}:原子正好N个
$preg = '/\d{3}/';
$str = '12345678';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//{n,}:原子最少N个
$preg = '/\w{5,}/';
$str = 'asdf 123_aa';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//{n,m} :最少N个，最多M个
$preg = '/\d{5,12}/';
$qq1 = '1234';
echo preg_match($preg,$qq1),'<hr>';

$qq2 = '123456';
echo preg_match($preg,$qq2),'<hr>';

/*
	此时qq3超过12位，为什么能匹配呢？
*/
$qq3 = '123456789101112';
echo preg_match($preg,$qq3,$match),'<hr>';
var_dump($match);
echo '<hr>';

//强制开始和结束
/*
	^:限定开始，就得放在原子前面
	$:限定结束，就得放在原子后面
*/
$preg = '/^\d{2}/';
$str = '1abc';
echo preg_match($preg,$str),'<hr>';

$str = '123abc';
echo preg_match($preg,$str),'<hr>';

/*
	$:限定结束
*/
$preg = '/\w{3}$/';
$str = '123$';
echo preg_match($preg,$str),'<hr>';

$str = '123';
echo preg_match($preg,$str),'<hr>';

echo '<h3>正确的QQ正则：</h3>';
$preg = '/^\d{5,12}$/';
echo "$preg",'<hr>';
$qq = '1234567891012';
echo preg_match($preg,$qq),'<hr>';

$qq1 = '123456789101';
echo preg_match($preg,$qq1),'<hr>';

$qq2 = '12345678';
echo preg_match($preg,$qq2),'<hr>';

/*
	\b：单词边界
	\B:非单词边界
*/
$preg = '/\ba/';
$str = 'app';
echo preg_match($preg,$str),'<br>';

$str = 'ppa';
echo preg_match($preg,$str),'<hr>';//0，限定在前面

$preg = '/\Ba/';
$str = 'app';
echo preg_match($preg,$str),'<br>';

$str = 'ppa';
echo preg_match($preg,$str);


