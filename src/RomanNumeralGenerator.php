<?php

namespace Larowlan\RomanNumeral;

/**
 * Defines a class for generating roman numerals from integers.
 */
class RomanNumeralGenerator {

  /**
   * Generates a roman numeral from an integer.
   *
   * @param int $number
   *   Integer to convert.
   * @param bool $lowerCase
   *   (optional) Pass TRUE to convert to lowercase. Defaults to FALSE.
   *
   * @return string
   *   Roman numeral representing the passed integer.
   */
  public function generate(int $number, bool $lowerCase = FALSE) : string {
    //if(!$lowerCase) {
    	$n = intval($number); 
    	$res = ''; 
    	$romanNumber_array = array( 
        	'M'  => 1000, 
        	'CM' => 900, 
        	'D'  => 500, 
        	'CD' => 400, 
        	'C'  => 100, 
        	'XC' => 90, 
        	'L'  => 50, 
        	'XL' => 40, 
        	'X'  => 10, 
        	'IX' => 9, 
        	'V'  => 5, 
        	'IV' => 4, 
        	'I'  => 1); 
    	foreach ($romanNumber_array as $roman => $number){ 
        	$matches = intval($n / $number); 
        	$res .= str_repeat($roman, $matches); 
        	$n = $n % $number; 
    	}
    if(!$lowerCase) {
	return $res;
    } 
    else {
	return strtolower($res);	
    }
    //return $res; 
  }

}
