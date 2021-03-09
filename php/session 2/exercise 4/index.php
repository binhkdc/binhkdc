<?php
$sum = 0;
$x = 1;
while ($x < 100) {
    $sum += $x;
    $x++;
}
echo "Tổng các số từ 1-100 là: $sum <br>";

$y=1;
while ($y < 100) {
    $sum += ($y*$y);
    $y++;
    if ($y==50){
     break;
    }
}
echo "Tổng bình phương các số từ 1-100 là: $sum <br>";
?>