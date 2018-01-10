<?php

echo "<h1> looping == fun! </h1>";

	//exercise 1: Create a script that displays integers from 1-100 on one line using loop statement add space from every number.
	echo "EXERCISE #1 <br>";

	for($i = 0; $i <= 100; $i++) {
		echo $i . " ";
	}




	//exercise 2: Create a script that displays integers from 100-0 on one line using loop statement add space from every number.
	echo "<hr> EXERCISE #2 <br>";

	for($i = 100; $i >= 0; $i--) {
		echo $i . " ";
	}



	//exercise 3: Create a script that determine if number is odd or even from 0-10. ex: (0 is an even number).		
	echo " <hr>EXERCISE #3 <br>";

	for($i = 0; $i <= 10; $i++) {
		echo $i;

		if(($i % 2) == 0 ) {
			echo " is an even number. <br>";
		} 

		else {
			echo " is an odd number.  <br>";
		}
	}



	//exercise 4: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line using loop statement. There will be no hyphen(-) at starting and ending position.
	echo " <hr>EXERCISE #4 <br>";

	for($i = 1; $i <= 10; $i++) {
		echo $i;
		 
		if($i !=10) {
			
			echo "-";
		}
		
		else {
			echo "";
		}
	}



	//exercise 5: Create a script using a for loop and get the sum of all integers between 0 and 30 and display the total. ex:(0+1+2 to 30).
	
	echo " <hr>EXERCISE #5 <br>";

	for ($i = 1; $i <= 30; $i++) {
		$numberHolder .= $i == 1 ? $i : "+" . $i;
	   	$sum += $i;
	}
	echo "The sum of" . $numberHolder . "is " . $sum . ".";

	/*exercise 6:

		Create a script to construct the following pattern, using for loop.:

			1
			12 
			123 
			1234 
			12345 	
	*/

	echo " <hr>EXERCISE #6 <br>";
	for ($i = 1; $i <= 5; $i++) {
		for($a = 1; $a <= $i; $a++) {
			echo $a;
		}
		echo "<br>";
	   }



?>