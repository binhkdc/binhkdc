<?php
$nameErr = $passwordErr = $userErr = "";
$name = $password = $user = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Bạn chưa nhập Username";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST['password'])) {
        $passwordErr = "Bạn chưa nhập password";
    } else {
        $password = test_input($_POST["password"]);
        if ($_POST['name'] == 'admin' || $_POST['password'] == 'admin') {
            $user = "Lê Đăng Bình";
        } else {
            $userErr = "Đăng nhập thất bại :(";
        }
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
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="w-50 p-5">
        <div class="text-center bg-success p-3 rounded">
            <h1>Signin:</h1>
        </div><br>
        <input type='text' name='name' class='form-control bg-light' placeholder='Username'>
        <span class="text-danger"><?php echo $nameErr ?></span><br>
        <input type='password' name='password' class='form-control bg-light' placeholder='Password'>
        <span class="text-danger"><?php echo $passwordErr ?></span><br>
        <input type='submit' value='signin' name='signin' class='btn btn-success form-control'>
        <span class="text-danger"><?php echo $userErr ?></span><br>
        <br>
    </div>
</form>
<span class="text-success"><?php echo $user ?></span><br>

</body>


