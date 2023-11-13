<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "permataparty"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}


// function register
function register($data)
{
    global $conn;

    $email = $data["email"];
    $password = $data["password"];
    $password2 = $data["password2"];

    // pengecekan email apakah ada di database
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert ('Username/Email sudah terdaftar, mohon pilih Username/Email lain');
            </script>";
        return false;
    }

    // pengecekan password sama
    if ($password !== $password2) {
        echo "<script>
                alert ('Password yang dimasukkan TIDAK SAMA');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES ('', '$email', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
