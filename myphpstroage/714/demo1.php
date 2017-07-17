<?php 
/*
	单文件上传
	注意：文件上传必须满足两个条件
	1、方式必须是post
	2、必须在form标签内有属性；enctype="multipart/form-data"
*/
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>单文件上传</title>
	</head>	
	<body>
		<form action="test.php" method="post" enctype="multipart/form-data">
			
			<!--注意：如果要在表单中设置对文件的限制，必须得位于上传项之前，否则不生效-->
			
			选择<input type="file" name="pho"><br><br>
			<input type="submit">
			
		</form>
	</body>
</html>









