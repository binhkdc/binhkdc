<?php
 $masp='EV2009';
 $tensp='Tấm hợp kim nhôm ngoài trời EV2009';
 $soluong=500;
 $dongia=160000;
 $x=0.05;
 echo $masp."<br>".$tensp."<br>".$soluong."<br>".$dongia."<br>";
 echo "Trước khi trừ thuế: ".$soluong*$dongia."<br>";
 echo "Sau khi trừ thuế: ".$soluong*$dongia*$x;
?>