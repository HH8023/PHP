<?php 
/*
	�����ת����ţ�
	ע�⣺�˴���ת������������е���Ҫת��ķ��ţ���PHP�е�ת����Ų���һ����
	\"
	\'
	\*
	\?
	\+
	\.
*/
$preg = '/\?/';//��ʱ'?'���ǣ�
$str = '"?';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

$preg = '/\+/';//?  *  .  ����Ҫת�壬���򱨴�
$str = '1+1';
echo preg_match($preg,$str);
echo '<hr>';

$preg = '/\*/';
$str = "*";
echo preg_match($preg,$str);



