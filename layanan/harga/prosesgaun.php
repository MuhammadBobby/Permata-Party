<?php 
    require "koneksi.php";

    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $tanggal = $_POST["tanggal"];
    $paket = $_POST["paket"];
    $layanan = "Gaun";

    if ($paket == "sederhana") {
        $harga = 4000000;
    } else if ($paket == "mewah") {
        $harga = 5500000;
    } else if ($paket == "glamour") {
        $harga = 7000000;
    } else {
        $harga = 0;
    }

    mysqli_query($conn,"insert into services (id, nama, email, layanan, paket, harga, tanggal_pemesanan) values ('', '$nama', '$email', '$layanan', '$paket', $harga, '$tanggal')");

        echo '<script> alert("Pesanan Anda Berhasil Dibuat")</script>';
        include "gaun.html";;


?>