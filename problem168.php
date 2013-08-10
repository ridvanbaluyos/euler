<?php
require_once "lib.php";
require_once "problem16.php";

function rotate_right($input)
{
    $input = (string) $input;
    $length = strlen($input);
    $rotated_number[0] = $input[$length - 1];
    $ctr = 0;

    for ($i = 1; $i < $length; $i++)
    {
        $rotated_number[$i] = $input[$ctr];
        $ctr++;
    }
    
    return implode('', $rotated_number);
}

function has_number_rotations($input)
{
    $rotated_number = rotate_right($input);
    $length = strlen((string) $rotated_number) - 1;
    $unusual_property = (float) $length * (float) $input;
    return ($rotated_number == $unusual_property) ? true : false;
}

$max = (float) fast_power(10, 100);
$numbers = array();
echo $max;
for ($i = 10; $i <= $max; $i++)
{
    echo "Iteration: " . $i . "\n";
    if (has_number_rotations($i))
    {
        array_push($numbers, $i);
        echo "FOUND: " . $i . "\n";
        die();
    }
}

print_r($numbers);
?>
