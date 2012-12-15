<?php
	# varaiables can be used inside double quoted strings
	# escape character \n \t are supported in double quoted strings
	$name = 'abhinav';
	$string1 = 'my name is $name';		
	
	$string2 = "my name is $name\n";
	echo $string1;
	echo "\n";
	echo $string2;
?>
