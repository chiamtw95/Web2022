<!-- 4. 
    Write a PHP program that uses the increment operator (++) and the
    combined multiplication operator (*=) to print out the numbers
    from 1 to 5 and powers of 2 from 2 (2^1) to 32 (2^5) 
-->

<?php
    for($i=1; $i<=5; $i++){
        echo $i;
        echo " ";    
    }
    echo "<br>";

    $ans = 1;
    for($j=1; $j<=5; $j++){
        $ans *= 2;
        echo $ans;
        echo " ";    
    }
?>