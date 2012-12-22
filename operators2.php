<?php
	/*    comparison operators
		
		operator 1                 operator2      comparison 
		number 				number        numeric

		string entire numeric         string entire   numeric  use strcmp() for lexographic
                                              numeric  
     
		string numeric                number           number

		string not comp.              number		lexiographic
		numeric
		
		string entire numeric 	     string that is
					     not entire numeric		lexographic

		string not entire numeric    string that is 
					     not entire numeric		lexographic		
	
	*/
	
	
	$op1 = 34;
	$op2 = 35;
	$op3 = '5t';
	$op4 = '5r';
	$op5 = '24';
	$op6 = '14';
	$op6 = '45';
	$op7 = 45;
	$op8 = 100;
	$op9 = '100';

	//echo $op2 >  $op1; // correct
	//echo $op1 > $op3 ; // ? ans should be false
	//echo $op3 > $op4; // correct	 
	//echo $op5 > $op6; // correct 
	//echo $op6 == $op7; //equal numeric comparison
	//echo !($op6 === $op7) // 1 because !false --> === checks value and datatype
	//echo !($op8 != $op9) // false numeric
	echo $op8!==$op9 // 1 type check

?>
