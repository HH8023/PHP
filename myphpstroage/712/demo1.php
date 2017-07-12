<?php 
/*
	strtotime():面试常考的函数
	返回的是时间戳，如果想看到之观点，需要格式化
*/
echo date('Y-m-d H:i:s'),'<br>';
$time = strtotime('-1year');
echo date('Y-m-d H:i:s',$time);


