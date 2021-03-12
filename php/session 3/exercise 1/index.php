
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="index.php" method="post">
    <div class="w-50 bg-light p-5">
        <h1>Signin:</h1>
        <input type='text' name='name' class='form-control' placeholder='Username' required><br>
        <input type='password' name='password' class='form-control' placeholder='Password' required><br>
        <?php
        echo "<input type='submit' value='signin' name='signin' class='btn btn-success'>";
        ?>
        <br>
    </div>
</form>
<?php
$usererr = "<p class='text-danger'>Đăng nhập thất bại :(</p>";
if ($_POST['name'] == 'admin' || $_POST['password'] == 'admin') {
    echo "Lê Đăng Bình";
    }else{
        if($_POST['name'] == '' || $_POST['password'] == '') {
        }else{
            echo $usererr;
        }
    }

?>


