<?php
/* 
	类型约束
 */
// in_array(1,2,3);

function sum(int $n, int $m)
{
	echo  $n+$m, '<br>';
}
sum(1,2.2);//2.2是浮点，但是照样可以计算
sum('a','b');
