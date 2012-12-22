<?php
	$var1 = 2;
	$var3 = null;
	$var2 = &$var1;
	echo $var2;
	unset($var1);//
	echo $var1;
	if(is_null($var3)){
		echo 'null';
	}
	echo $var2;


?>
