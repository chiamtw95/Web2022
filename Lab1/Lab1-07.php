<!-- 7. Modify your answer to Exercise 3 to use for() instead of while(). -->
<?php
    for($temp=-50; $temp<=50; $temp+=5){
        $celsius = ($temp - 32) * (5/9);
        printf("Fahrenheit:%d Celsius:%d <br>", $temp, $celsius);
    }
?>