<?php
	/* Write a programme that prints the number from 1 to 100. However,
	 * for multiples of three print 'Fizz' instead of the number and
	 * for multiples of five print 'Buzz'. For number that are multiple
	 * of three and five print 'FizzBuzz'. */
	 
	 $i = 0;
	 
	 while ($i < 100) {
		 ++$i;
		 if (is_int ($i/3)) {
			 echo ("Fizz");
				}
		 if (is_int ($i/5)) {
			 echo ("Buzz");
				}
		 if ( (is_int ($i/3) == FALSE) && (is_int ($i/5) == FALSE) ) {
			 echo ($i);
			 }
	     echo ("\n");
		 }
?>
