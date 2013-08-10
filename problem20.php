<?php
include_once "lib.php";

function fast_factorial($num)
{
    return number_format(fast_factorial_aux($num, 1), 0, '', '');
}

function fast_factorial_aux($num, $aux)
{    
    return ($num == 1) ? $aux : fast_factorial_aux(($num - 1), ($num * $aux));
}

echo get_sum_of_digits(fast_factorial(10));
echo "\n";
?>
