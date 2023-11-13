<?php 
    require "koneksi.php";

    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $tanggal = $_POST["tanggal"];
    $paket = $_POST["paket"];
    $layanan = "Decor";

    if ($paket == "sapphire") {
        $harga = 13000000;
    } else if ($paket == "emerald") {
        $harga = 15000000;
    } else if ($paket == "diamond") {
        $harga = 18000000;
    } else {
        $harga = 0;
    }

    mysqli_query($conn,"insert into services (id, nama, email, layanan, paket, harga, tanggal_pemesanan) values ('', '$nama', '$email', '$layanan', '$paket', $harga, '$tanggal')");

        echo '<script> alert("Pesanan Anda Berhasil Dibuat")</script>';
        include "decor.html";;


?>