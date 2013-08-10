<?php
include "problem20.php";

$max = fast_factorial(10);
$quotient = (float) 0;

for ($dividend = 1; $dividend <= $max; $dividend++)
{
    echo $dividend . "\n";
    $flag = true;
    foreach (range(1, 20) as $divisor)
    {
        $quotient = (float) $dividend % (float) $divisor;

        if ($quotient != 0)
        {
            $flag = false;
            break;
        }
    }

    if ($flag)
    {
        die("Found: {$dividend}\n");
    }
}

?>
