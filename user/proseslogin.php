<?php

session_start();
require 'function.php';


// pemeriksaan session login
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}


if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];


    // cek email
    if ($result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'")) {

        // cek password
        if (mysqli_num_rows($result) === 1) {
            echo "$password";
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {

                // session
                $_SESSION["login"] = true;

                // cek cookie
                if (isset($_POST["remember"])) {
                    // id
                    setcookie("xx", $row["id"], time() + 60 * 5);
                    // email
                    setcookie("yy", hash("sha256", $row["email"]), time() + 60 * 5);
                }

                header("location: index.php");
                exit;
            }
        }
    }

    header("location: login.php?error=true");
}
