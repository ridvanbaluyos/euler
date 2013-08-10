<?php
function get_sum_of_digits($number)
{
    $length = strlen($number);
    $sum = 0;
    
    for ($i = 0; $i < $length; $i++)
    {
        $sum += $number[$i];
    }
    
    return $sum;
}

function is_palindrome($input)
{
    return ($input == get_palindrome($input)) ? true : false;
}

function get_palindrome($input)
{
    return strrev($input);
}

?>
