<?php
    $w = 10;
    $h = 90;
    $ans=get_area($w,$h);

    printf("A rectangle of length %d and width %d has an area of %d", $w,$h,$ans);

    function get_area($w, $h){
        return $w*$h;
    }

?>