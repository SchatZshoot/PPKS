
<?php
require 'proccess-register.php';
if (isset($_POST['register'])){
    if(registrasi($_POST) > 0 ){
        echo "<script>alert('Berhasil membuat akun');
        window.location='login.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center backgroundLogin">
<div class="bag">
    <div>
        <h1>Register Account</h1>
        <p class="Sub" style="color:rgb(165, 161, 161)">Register if you dont have account</p>
    </div>
    <form action="" method="post">
        <div>
            <input class="" placeholder="Nama" type="text" name="nama"required>
        </div>
        <div>
            <input class="" placeholder="NIM" type="text" name="nim" required>
        </div>
        <div>
            <input class="" placeholder="Email" type="text" name="email" required>
        </div>
        <div>
            <input class="" placeholder="Password" type="password" name="password" required>
        </div>
        <div>
            <input class="" placeholder="Confirm Password" type="password" name="password2" required>
        </div>
        <button class="simpan buttonn  mt-4" type="submit"name="register">Register</button>
    </form>
    <p class="my-2">Already Have Account?
            <a href="login.php">Login</a>
</p>
</div>
</body>
</html>