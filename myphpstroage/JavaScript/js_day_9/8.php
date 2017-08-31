<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=lamp190;charset=utf8','root','');
	}catch(PDOException $e){
		die('数据库连接失败。原因：'.$e->getMessage());
	}

	
	$sql = "SELECT * FROM stu";

	$stmt = $pdo->prepare($sql);

	$stmt->execute();

	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// var_dump($list);
	echo json_encode($list);
