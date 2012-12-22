<?php
	$a = true;
	$b = 0;
	$c = 0.0;
	$d = "";
	$e  = array('1'=>'first');

	if($e){
		echo $e;
	}

	foreach($e as $index=>$element){
		echo "Element  at $index , ".$element;
	}	

?>
