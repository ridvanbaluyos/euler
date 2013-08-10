<?php
include_once "lib.php";

function fast_power($base, $exponent)
{
    return number_format(fast_power_aux($base, $exponent, 1), 0, '', '');
}

function fast_power_aux($base, $exponent, $aux)
{
    return ($exponent == 0) ? $aux : fast_power_aux($base, ($exponent - 1), ($base * $aux));
}

//echo get_sum_of_digits(fast_power(2, 1000));
//echo "\n";
?>
