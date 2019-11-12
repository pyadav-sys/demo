<?php
	

// Use of Global variables ------

	$x=10;
	$y=20;
	function myfun(){
		global $x,$y;
		$y = $x + $y;
	}

	myfun();
	echo $y;
// End of Global Variables

echo "<br>";

// *****Local Variable ******
 function myfun2(){
 	$a=10;
 	$b=30;
 	echo $a+$b;
 }
myfun2();


// ****** Static Variables *********

echo "<br>";


function myfun3(){

	static $m=0;
	echo "Static Value : - ".$m;
	$m++;
	echo "<br>";
}


myfun3();
myfun3();
myfun3();



?>
