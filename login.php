<?php
require 'proccess-register.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM registrasi WHERE email = '$email'");

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])){
            header("Location:home.html");
            exit;
        }else {
            echo "<script>alert('Email atau password salah!');</script>";

        $error = true;

    }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center backgroundLogin">
<div class="bag">
    <div>
        <h1>Login Account</h1>
        <p class="Sub" style="color:rgb(165, 161, 161)">Login if you already have account</p>
    </div>
    <form action="" method="post">
        <div>
            <input class="" placeholder="Email" type="text" name="email">
        </div>
        <div>
            <input class="" placeholder="Password" type="password" id="password" name="password">
        </div>
        <button class="simpan buttonn  mt-4" type="submit" id="btnlogin" name="login">Login</button>
    </form>
    <p class="my-2">Don't have Account?
            <a href="register.php">Register</a>
</p>
</div>
</body>
</html>