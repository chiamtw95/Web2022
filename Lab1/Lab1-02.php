<!-- 
2. Write a PHP program that computes the total cost of this restaurant
meal: two hamburgers at $4.95 each, one chocolate milkshake at
$1.95, and one cola at 85 cents. The sales tax rate is 7.5%, and you
left a pre-tax tip of 16%. 
-->

<?php
    $burger = 4.95;
    $milkshake = 1.95;
    $coke = 0.85;

    $tax_rate = 1.075;
    $tip_rate = 1.16;

    $sum = 2*$burger + $milkshake + $coke;
    $tip = $sum * $tip_rate;
    $tax = $sum * $tax_rate;
    $total = $sum + $tip + $tax;
    
    echo $total;
?>