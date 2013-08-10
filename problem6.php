<?php
include_once "lib.php";
include_once "problem16.php";

function get_sum_of_squares($input)
{
    $sum = 0;

    for ($i = 1; $i <= $input; $i++)
    {
        $sum += fast_power($i, 2);
    }

    return $sum;
}

function get_square_of_sum($input)
{

    $sum = 0;
    for ($i = 1; $i <= $input; $i++)
    {
        $sum += $i;
    }

    return fast_power($sum, 2);
}

$diff = (float) get_square_of_sum(100) - (float) get_sum_of_squares(100); 
echo $diff . "\n";

?>
