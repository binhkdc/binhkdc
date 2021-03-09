<?php
$sum = 0;
$x = 1;
while ($x < 100) {
    $sum += $x;
    $x++;
}
echo "Tổng các số từ 1-100 là: $sum <br>";

$sum1=0;
echo "các số chia hết cho 3 từ 20-50 là: ";
for($y=20;$y<50;$y++){
    if($y%3==0){
        echo $y.',';
    }
}


?>