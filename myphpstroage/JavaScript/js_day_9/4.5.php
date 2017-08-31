<?php
	$m1 = $_REQUEST['m1'];
	$m2 = $_REQUEST['m2'];
	$c = $_REQUEST['c'];

	switch ($c) {
		case 1:
			echo $m1.'+'.$m2.'='.($m1+$m2);
			break;
		case 2:
			echo $m1.'-'.$m2.'='.($m1-$m2);
			break;		
		case 3:
			echo $m1.'*'.$m2.'='.($m1*$m2);
			break;		
		case 4:
			echo $m1.'/'.$m2.'='.($m1/$m2);
			break;		
		
	}

