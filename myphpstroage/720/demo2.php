<?php
/* 
	序列化:就是把类型转换为字符串用来传输和保存
	serialize():序列化
	unserialize()：反序列化
 */
/* 
	serialize()
 */
$arr = [1,2,3,'a','b',true,5.5,'将序列化结果存在了文件中'];
$str = serialize($arr);
// var_dump($str);//string(72) "a:7:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;s:1:"a";i:4;s:1:"b";i:5;b:1;i:6;d:5.5;}"

/* 
	将序列化结果存在了文件中
 */
file_put_contents('test.txt', $str);
echo '<hr>';

/* 
	用到的时候可以反序列化出来玩
 */
 
/* 
	unserialize()
 */
$str = file_get_contents('test.txt');
var_dump(unserialize($str));//array(8) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> string(1) "a" [4]=> string(1) "b" [5]=> bool(true) [6]=> float(5.5) [7]=> string(36) "将序列化结果存在了文件中" }
/* 
	想想，在留言板的制作时，需要传输内容，当时是把数组变成字符串，传输，到地方之后，再转换为数组。有了这个之后，完全可以这么做
 */