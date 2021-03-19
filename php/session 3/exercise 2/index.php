<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
$nameErr = $emailErr = $lnameErr = $genderErr = $checkboxArr = "";
$name = $email = $gender = $lname = $checkbox = "";
$state = $_POST['select'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "First Name không được để trống";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST['lname'])) {
        $lnameErr = "Larst Name không được để trống";
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email không được để trống";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Chưa chọn giới tính :(";
    } else {
        $gender = test_input($_POST["gender"]);
    }

}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="bg-light w-50"
    <h1>Đăng ký</h1><br>
    <label for="name"></label>
    <input type="text" class="form-control" placeholder="name" name="name"><span
            class="text-danger"><?php echo "$nameErr"; ?></span><br>
    <label for="lname"></label>
    <input type="text" class="form-control" placeholder="Last name" name="lname"><span
            class="text-danger"><?php echo "$lnameErr"; ?></span><br>
    <label for="email"></label>
    <input type="email" class="form-control" placeholder="email" name=" email"><span
            class="text-danger"><?php echo "$emailErr"; ?></span><br>
    Gender <input type="radio" name="gender" value="1">Male
    <input type="radio" name="gender" value="2">Female<span class="text-danger">
        <?php echo " $genderErr"; ?></span><br>
    State
    <select name="select" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br>
    Hobbies<br>
    <input type="checkbox" name="checkbox[]" value="1">Badminton
    <input type="checkbox" name="checkbox[]" value="2">Football
    <input type="checkbox" name="checkbox[]" value="3">Bicyle<br>
    <input type="submit" name="submit" value="submit">
    </div>
</form>
</body>
<?php
if(isset($_POST['submit'])) {
    echo "<Span class='text-success'>Đăng kí thành công:</Span><br>";
    echo "<span class='text-success'> Thông tin của bạn: <br></span>";
    echo "First name: " . $name . "<br>";
    echo "Last Name: " . $lname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Gender: ";
    if ($gender == 1) {
        echo "Male";
    } else {
        echo "Female";
    }

    echo "<br>State: ";
    if ($state == 1) {
        echo "1";
    } else if ($state == 2) {
        echo "2";
    } else {
        echo "3";
    }

    echo "<br> Hobbies: ";
    $checkboxArr = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
    foreach ($checkboxArr as $value) {
        if ($value == 1) {
            echo "Badminton, ";
        } else if ($value == 2) {
            echo "Football, ";
        } else {
            echo "Bicyle";
        }
    }
}
?>
