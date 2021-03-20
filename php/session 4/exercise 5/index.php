<?php
function reverse($number) {
    $change= "$number";

    if($number<0){
        $change=$number*(-1);
        echo "-".strrev($change);
    }else {
        echo strrev($change);
    }
}
reverse(-22978);
?>