<!-- 
    3. Write a PHP program that sets the variable $first_name to your first
    name and $last_name to your last name. Print out a string containing
    your first and last name separated by a space. Also print out the
    length of that string. 
-->
<?php
    $first_name = "Tow Wang";
    $last_name = "Chiam";
    $len = strlen($first_name) + strlen($last_name);
    
    printf("%s %s <br> Name length: %d", $first_name, $last_name, $len)
?>
