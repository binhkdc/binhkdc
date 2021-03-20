<?php
$number1=$_GET['a'];
$number2=$_GET['b'];
if(is_numeric($number1)==0){
    $numberErr="chi duoc nhap so";
}else{
    $numberErr="";
}

if(is_numeric($number2)==0){
    $number2Err="chi duoc nhap so";
}else{
    $number2Err="";
}

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="w-50 p-2">
    <form method="get">
        <h1>Thực hành toán tử</h1>
        <hr>
        <input type="text" class="form-control" name="a" required><?php echo $numberErr ?><br>
        <input type="text" class="form-control" name="b" required><?php echo $number2Err ?><br>
        <input type="submit" name="btnSubmit" class="btn-success" id="btnSubmit" value="A+B" />
        <input type="submit" name="btnSubmit" class="btn-primary" id="btnSubmit" value="A-B" />
        <input type="submit" name="btnSubmit" class="btn-danger" id="btnSubmit" value="A*B" />
        <input type="submit" name="btnSubmit" id="btnSubmit" value="A/B" />
    </form>
</div>
</body>
</html>
<?php

if (isset($_GET['btnSubmit']))
{
    if($_GET['btnSubmit'] == 'A+B')
    {
        echo $number1+$number2;

    }else{
        echo "";
    }

    if($_GET['btnSubmit'] == 'A-B')
    {
        echo $number1-$number2;

    }else{
        echo "";
    }

    if($_GET['btnSubmit'] == 'A*B')
    {
        echo $number1*$number2;

    }else{
        echo "";
    }

    if($_GET['btnSubmit'] == 'A/B')
    {
        echo $number1/$number2;

    }else{
        echo "";
    }

}
?>
