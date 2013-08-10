<?php
include_once "lib.php";

function fast_triangular($input)
{
    return fast_triangular_aux($input, 1, 1);
}

function fast_triangular_aux($input, $aux, $iteration)
{
    if ($input == 1) return $aux;
    
    $iteration++;

    echo "Iteration: {$iteration}, Aux: {$aux} \n";

    if ($iteration == 500) return $aux;

    return ($input == 1) ? $aux : fast_triangular_aux(($input - 1), ($input + $aux), $iteration);
}

echo fast_triangular(550);
echo "\n";
?>
