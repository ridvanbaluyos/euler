<?php
include_once "lib.php";

function fib($input)
{
    return (($input == 1) || ($input == 2)) ? 1 : (fib($input - 1) + fib($input - 2));
}


$i = 1;
while (true)
{
    $fib = fib($i);
    echo $fib . "\n";
    if (strlen($fib) == 1000) die("Found: {$fib}\n");

    $i++;
}
?>
