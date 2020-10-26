<?php
/**
 * Write a function that accepts an array of 10 integers 
 * (between 0 and 9), that returns a string of those numbers
 *  in the form of a phone number.
 *
 * @param  array $digits
 * @return string
 */

 // createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns "(123) 456-7890"
 // Don't forget the space after the closing parentheses!

function createPhoneNumber(array $digits): string
{
    return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
}

function createPhoneNumberSolution2($numbersArray)
{
    return vsprintf("(%d%d%d) %d%d%d-%d%d%d%d", $numbersArray);
}


function createPhoneNumberSolution3($numbersArray)
{
    //input validation
    if (count($numbersArray) !== 10) {
            throw new \InvalidArgumentException('invalid input: must be 10 digits');
    }
    foreach ($numbersArray as $digit) {
        if ($digit< 0 || $digit >9) {
            throw new \InvalidArgumentException('invalid input: each value should be between 0 and 9');
        }
    }
        
          //output processing
        return sprintf(
            '(%s) %s-%s',
            $numbersArray[0] . $numbersArray[1] . $numbersArray[2],
            $numbersArray[3] . $numbersArray[4] . $numbersArray[5],
            $numbersArray[6] . $numbersArray[7] . $numbersArray[8] . $numbersArray[9]
        );
}

function createPhoneNumberSolution4($numbersArray)
{
    preg_match('/(\d{3})(\d{3})(\d{4})/', implode('', $numbersArray), $matches);
    return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
}

function createPhoneNumberSolution5(array $numbersArray): string
{
    return preg_replace('/^([\d]{3})([\d]{3})([\d]{4})$/', '($1) $2-$3', implode('', $numbersArray));
}

function createPhoneNumberSolution6($numbersArray)
{
    // your code here
    $text = '('.$numbersArray[0].$numbersArray[1].$numbersArray[2].') '.$numbersArray[3].$numbersArray[4].$numbersArray[5].'-'.$numbersArray[6].$numbersArray[7].$numbersArray[8].$numbersArray[9];
      
     return $text;
}
