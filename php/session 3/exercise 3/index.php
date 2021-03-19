<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php

$nameErr = $emailErr = $phoneErr =  "";
$name = $email  = $phone =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name không được để trống";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email không được để trống";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST['number'])) {
        $phoneErr = "phone không được để trống";
    } else {
        $phone = test_input($_POST["number"]);
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
    <div class="container">
        <div class="col-6 bg-light pt-2 mx-auto" >
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="text" name="name" placeholder="Name" class="form-control">
                <p class="text-danger"><?php echo $nameErr?></p>
                <input type="text" name="email" placeholder="Email" class="form-control">
                <p class="text-danger"><?php echo $emailErr?></p>
                <input type="text" name="number" placeholder="Phone number" class="form-control">
                <p class="text-danger"><?php echo $phoneErr?></p>
                <textarea name="message" rows="6" cols="25" placeholder="type yor Message here" class="form-control"></textarea><br />
                <input type="submit" placeholder="Submit" class="form-control btn-danger" value="Send">
            </form>
        </div>
    </div>
</body>
<?php

    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "message: ".$_POST['message'] ;

?>