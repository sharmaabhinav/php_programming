<?php
	// php convetrs string to integer if other operand in integer implicit cast string--->0 if first non white character is not number.
	//otherwisw string---> that number
	
	$a = 9;
        $b = ' 34hi';
	$c = ' h34';
	$d = '3.14hi';
        echo $a + $b;
	echo $a + $c;
	echo $d * 2; 



?>
