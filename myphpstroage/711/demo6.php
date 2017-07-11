<?php 

echo ini_get('date.timezone'),'<hr>';

/*
	time()  返回时间戳
*/
echo time(),'<hr>';//返回字符串

/*
	date()  返回格式化的日期
*/
echo date('Y-m-d H:i:s'),'<br>';
echo date('Y/m/d H:i:s'),'<hr>';
echo date('Y~m~d H:i:s'),'<br>';
echo date('Y~m~d H:i:s',0),'<br>';
