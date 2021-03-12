<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}
?>
<form action="login.php" method="post">
    <div class="bg-light w-50"
    <h1>Đăng ký</h1><br>
    Name<input type="text" name="name"><span><?php echo $nameErr; ?></span><br>
    Last Name <input type="text" name="lname"><span><?php echo "$lnameErr"; ?></span><br>
    Email <input type="email" name="email"><span><?php echo "$emailErr"; ?></span><br>
    Gender <input type="radio" name="gender" value="1">Male
    <input type="radio" name="gender" value="2">Female<br>
    <select name="select">
        <option value="1" name="1">Option 1</option>
        <option value="2" name="2">Option 2</option>
        <option value="3" name="3">Option 3</option>
    </select>
    <br>
    Hobbies<br>
    <input type="checkbox" name="checkbox[]">Badminton
    <input type="checkbox" name="checkbox[]">Football
    <input type="checkbox" name="checkbox[]">Bicyle<br>
    <input type="submit" name="submit" value="submit"><input type="reset" value="reset">
    </div>
</form>
