<?php 
/*
	多文件上传
	注意：文件上传必须满足两个条件：
	1、方式必须是post
	2、必须在form标签内有属性，enctype="multipart/form-data"
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>多文件上传</title>
	</head>
	<body>
		<form action="test1.php" method="post" enctype="multipart/form-data">
			选择：<input type="file" name="pho[]"><br><br> 
			选择：<input type="file" name="pho[]"><br><br> 
			选择：<input type="file" name="pho[]"><br><br> 
			选择：<input type="file" name="pho[]"><br><br> 
			选择：<input type="file" name="pho[]"><br><br> 
			选择：<input type="file" name="pho[]"><br><br> 
			<input type="submit">
		</form>
	</body>
</html>












