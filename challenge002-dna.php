<?php
/* Complementary DNA
 * https://www.codewars.com/kata/complementary-dna/train/php
 * 
 * Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of 
 *  and carries the "instructions" for the development and functioning 
 * of living organisms.
 * 
 * If you want to know more http://en.wikipedia.org/wiki/DNA
 * 
 * In DNA strings, symbols "A" and "T" are complements of each other,
 * as "C" and "G". You have function with one side of the DNA (string, 
 * except for Haskell); you need to get the other complementary side. 
 * DNA strand is never empty or there is no DNA at all (again, except 
 * for Haskell). More similar exercise are found here 
 * http://rosalind.info/problems/list-view/ (source)
 * 
 * DNA_strand("ATTGC") // returns "TAACG"
 * DNA_strand("GTAT") // returns "CATA"
 * */
 
 function DNA_strand($dna) {
	 
  $dnalen = strlen($dna);
  $dnaerr = FALSE;
  
   for ($i=0; $i < $dnalen; $i++) {
	   if (strtoupper($dna[$i]) == "A") {
		   $dnareturn[] = "T";
		   }
	   elseif (strtoupper($dna[$i]) == "T") {
		   $dnareturn[] = "A";
		   }
	   elseif (strtoupper($dna[$i]) == "C") {
		   $dnareturn[] = "G";
		   }
	   elseif (strtoupper($dna[$i]) == "G") {
		   $dnareturn[] = "C";
		   }
	   else {
		   $dnareturn[] = "*";
		   $dnaerr = TRUE;
		   }
	   }
	   
	   if ($dnaerr) {
		   echo ("WARNING: It was not possible to find the complementary of some DNA bases.\n");
	   }
  
   $dnareturn = implode("", $dnareturn);
  
  return $dnareturn;
}


$string = readline("Insert DNA string (only \'ACGT\' are valid):\n");

$dnadecoded = DNA_strand($string);

echo ("Complementary string:\n $dnadecoded\n");

?>
