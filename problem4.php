<?php
include_once "lib.php";
$palindromes = array();
$largest_palindrome = 0;

foreach (range(1, 999) as $multiplicand)
{
    foreach (range(1, 999) as $multiplier)
    {
        $product = $multiplicand * $multiplier;
        if ($largest_palindrome < $product)
        {
            if (is_palindrome($product))
            {   
                echo "{$multiplicand} x {$multiplier} = {$product}\n";
                array_push($palindromes, $product);
                $largest_palindrome = $product;
            }
        }
    }
}

print_r($largest_palindrome);
?>
