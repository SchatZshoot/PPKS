<?php
$conn = mysqli_connect("localhost", "root", "", "web_ppks");

function registrasi($data) {
    global $conn;

    $nim = $data["nim"];
    $nama = $data["nama"];
    $email = strtolower(stripslashes($data["email"]));
    $password = $data["password"];
    $password2 = $data["password2"];

    $result = mysqli_query($conn, "SELECT email FROM registrasi WHERE email='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Email sudah terdaftar!');</script>";
        return false;
    }


    if($password !== $password2){
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO registrasi VALUES('$nim', '$nama', '$email', '$password')");
    return mysqli_affected_rows($conn);

}
?>