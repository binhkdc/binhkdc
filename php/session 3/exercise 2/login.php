<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php

    $nameErr = $emailErr = $lnameErr = "";
    if (empty($_POST['name'])) {
        $nameErr = "First Name không được để trống";
    }
    if (empty($_POST['lname'])) {
        $lnameErr = "Larst Name không được để trống";
    }
    if (empty($_POST['email'])) {
        $emailErr = "Email không được để trống";
    }

?>
<?php
echo "<Span class='text-success'>Đăng kí thành công:</Span><br>";
echo "<span class='text-success'> Thông tin của bạn: <br></span>";
echo "First name: ".$_POST['name']."<br>";
echo "Last Name: ".$_POST['lname']."<br>";
echo "Email: ".$_POST['email']."<br>";
$gender = $_POST['gender'];
if ($gender == 1) {
    echo "gender: "."Male";
} else {
    echo "gender: "."Female";
}
$select = $_POST['seclect'];
if ($select == 1) {
    echo 'Option 1';
} elseif ($select == 2) {
    echo 'Option 2';
}else{
    echo 'Option 3';
}
$checkboxArr = $_POST['checkbox'];
foreach ($checkboxArr as $checkbox){
    if ($checkbox ==1){
        echo "Badminton";
    }elseif($checkbox ==2){
        echo "Football";
    }else{
        echo "Bycyle";
    }
}
?>



