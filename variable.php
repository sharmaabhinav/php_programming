
<?php
	//global varaiables can't be accessed inside a function use $GLOBALS['varaiblename'] or global variable name
	// local variable is only inside a function
	//static variable retains its value between function calls
	//function parameters are local accessible inside function only

	
	
	
	$counter = 10;
	function myfunc() {
		//global $counter;
		echo $GLOBALS['counter'];
		
        }
	myfunc();


?>
