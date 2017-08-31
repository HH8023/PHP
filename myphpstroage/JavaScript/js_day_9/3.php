<?php
	$list = array('zhang3','li4','wang8');
	if(in_array($_GET['uname'],$list)){
		echo 1;
	}else{
		echo 2;
	}
	// echo $_GET['uname'];
