<?php
require_once "lib.php";

function is_lychrel_number($input, $iteration = 1)
{
    $answer = number_format((float) $input + (float) get_palindrome($input), 0, '', '');
    
    if ($iteration >= 50) return true;
    $iteration++;
    return (is_palindrome($answer)) ? false: is_lychrel_number($answer, $iteration);
}

$lychrel_count = 0;
$lychrels = array();
for ($input = 10000; $input > 0; $input--)
{
    if (is_lychrel_number($input)) 
    {
        array_push($lychrels, $input);
        $lychrel_count++;
    }
}

echo $lychrel_count . "\n"; 
?>
