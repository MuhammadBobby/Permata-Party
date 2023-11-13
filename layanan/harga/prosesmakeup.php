<?php 
    require "koneksi.php";

    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $tanggal = $_POST["tanggal"];
    $paket = $_POST["paket"];
    $layanan = "make up";

    if ($paket == "Natural Elegance") {
        $harga = 1000000;
    } else if ($paket == "Glamourous Diva") {
        $harga = 2500000;
    } else if ($paket == "Royal Family Special") {
        $harga = 4000000;
    } else {
        $harga = 0;
    }

    mysqli_query($conn,"insert into services (id, nama, email, layanan, paket, harga, tanggal_pemesanan) values ('', '$nama', '$email', '$layanan', '$paket', $harga, '$tanggal')");

        echo '<script> alert("Data Berhasil Disimpan")</script>';
        include "makeup.html";;


?>