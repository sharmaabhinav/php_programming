<?php
	//declare directive	
	register_tick_function('myfunc');
	declare(ticks = 3){
		for ($i=0;$i<10;$i++)
		echo $i.'<br>';
	}
	
	function myfunc(){
		echo "called<br>";
	}


?>
