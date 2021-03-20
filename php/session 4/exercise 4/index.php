<form method="post" action="index.php">
    <input type="text" name="test">
    <input type="submit" name="submit" value="kiemtra">
</form>

<?php
    $text=$_POST['test'];
    $change = strtolower($text);
    $txet=strrev($change);
    if($change == $txet){
        echo "$text là chuỗi palindrome";
    }else{
        echo "$text không phải chuỗi palindrome";
    }
?>