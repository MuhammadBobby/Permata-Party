<?php
session_start();


// pemeriksaan session login
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
?>




<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Permata Party</title>

  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- css -->
  <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-slate-700">
  <nav>
    <div class="nama flex content-center">
      <img src="../img/logo.png" alt="logo" />
      <h3 class="mb-2 text-slate-600 font-bold"><a href="#">Permata Party</a></h3>
    </div>

    <ul class="mb-2">
      <li><a href="#home" class="text-slate-600 font-bold">Home</a></li>
      <li><a href="#about" class="text-slate-600 font-bold">About Us</a></li>
      <li><a href="#service" class="text-slate-600 font-bold">Service</a></li>
      <li><a href="#galery" class="text-slate-600 font-bold">Gallery</a></li>
      <li><a href="#help" class="text-slate-600 font-bold">Help</a></li>
      <li class="logout"><a href="logout.php" class="font-extrabold">Logout</a></li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <!-- home -->
  <section id="home">
    <img src="../img/home.jpg" alt="hero" class="block h-screen w-screen object-cover brightness-[20%]" />
    <h1 class="text-3xl ms-5 text-cyan-100 font-extrabold tracking-wide absolute top-36 left-0 w-2/3 lg:ms-24 lg:w-1/2 lg:text-7xl lg:top-44">
      Wujudkan Hari Bahagia & Impian mu Bersama <span class="font-extrabold text-cyan-600">Permata Party</span>
    </h1>
  </section>
  <!-- akhir home -->

  <!-- about -->
  <section id="about">
    <div class="flex flex-wrap justify-center px-5 my-24">
      <div class="w-full lg:w-1/2">
        <img src="../img/about us.jpg" alt="about" class="rounded-xl lg:rounded-br-none" />
      </div>

      <div class="w-full mt-10 lg:w-1/2 lg:mt-0">
        <h2 class="text-white text-3xl font-bold mb-2 lg:text-right lg:mb-8 lg:text-5xl">About Us</h2>
        <div class="bg-slate-300 p-2 rounded-lg text-base font-normal text-slate-800 lg:text-sm xl:text-base lg:pb-1 lg:rounded-l-none xl:pb-14">
          <p class="py-1 indent-5">
            Setiap orang pasti ingin merayakan moment pernikahan yang membahagiakan, yang dapat dikenang suatu saat nanti. Untuk mendapatkan pernikahan yang diimpikan, tentu membutuhkan berbagai persiapan.
          </p>
          <p class="py-1 indent-5">
            Permata Decoration adalah perusahaan yang bergerak di bidang dekorasi interior dan eksterior. Kami menyediakan jasa dekorasi untuk berbagai acara seperti pernikahan, dan acara khitanan. Selain itu kami juga menyedikan jasa Make Up Artist, Box Hantaran, serta Penyewaan aksesoris dan gaun pengantin. Dengan pengalaman dan keahlian kami, kami berkomitmen untuk memberikan hasil dekorasi yang memukau dengan fokus pada kepuasan pelanggan dan inovasi yang berkelanjutan untuk memenuhi kebutuhan klien kami. Kami juga selalu berusaha untuk memberikan pelayanan terbaik dan harga yang terjangkau. Hubungi kami untuk membuat acara Anda menjadi lebih indah dan berkesan.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- alhit about -->

  <!-- service -->
  <section id="service">
    <div class="flex flex-wrap justify-center gap-5 px-5 my-24">
      <div class="w-full lg:w-1/2">
        <h2 class="text-white text-3xl font-bold mb-2 lg:mb-8 lg:text-5xl">Service</h2>
        <div class="bg-slate-300 pb-5 p-2 rounded-lg text-base font-normal text-slate-800 lg:text-sm xl:text-base lg:pb-1 xl:pb-3">
          <p class="py-1 indent-5">layanan apa aja sih yang dimiliki permata party??</p>
          <p class="py-1 indent-5">
            Permata Decoration didedikasikan untuk mengubah hari istimewa anda menjadi sebuah acara pernikahan yang lancar dan tak terlupakan. Tim kami akan mengurus setiap detail dengan presisi, mulai dari pemilihan lokasi dan dekorasi hingga hiburan. Kami bangga dengan komitmen kami untuk mewujudkan pernikahan impian Anda, memastikan bahwa setiap aspek disesuaikan dengan preferensi Anda. Dengan layanan penyelenggara pernikahan kami, Anda bisa bersantai dan menikmati perjalanan menuju hari bahagia Anda, tahu bahwa Anda berada di tangan yang terampil.
          </p>

          </p>
          <a href="../layanan/layanan.html" class="py-1 text-cyan-500">Lihat layanan selengkapnya >></a>
        </div>
      </div>

      <div class="w-full mt-10 lg:w-1/3 lg:mt-0">
        <img src="../img/service.jpeg" alt="about" class="rounded-xl" />
      </div>
    </div>
  </section>
  <!-- akhir service -->

  <!-- gallery -->
  <section id="galery" class="py-16 px-5">
    <h2 class="text-3xl font-bold text-white mb-5 ms-5 lg:text-7xl lg:font-extrabold">Gallery</h2>
    <div class="container">
      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="../img/pelaminan1.jpeg" style="width: 70%" class="m-auto" />
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="../img/pelaminan2.jpeg" style="width: 70%" class="m-auto" />
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="../img/makeup1.jpeg" style="width: 70%" class="m-auto" />
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="../img/makeup2.jpeg" style="width: 70%" class="m-auto" />
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="../img/gaun1.jpeg" style="width: 70%" class="m-auto" />
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="../img/gaun2.jpeg" style="width: 70%" class="m-auto" />
      </div>

    </div>
    <!-- 
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <div class="column">
        <img class="demo cursor" src="../img/pelaminan1.jpeg" style="width: 100%" onclick="currentSlide(1)" alt="PELAMINAN" />
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/pelaminan2.jpeg" style="width: 100%" onclick="currentSlide(2)" alt="AKSESORIS" />
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/makeup1.jpeg" style="width: 100%" onclick="currentSlide(3)" alt="MAKEUP" />
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/makeup2.jpeg" style="width: 100%" onclick="currentSlide(4)" alt="SEWA GAUN" />
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/gaun1.jpeg" style="width: 100%" onclick="currentSlide(5)" alt="HANTARAN" />
      </div>
      <div class="column">
        <img class="demo cursor" src="../img/gaun2.jpeg" style="width: 100%" onclick="currentSlide(6)" alt="PELAMINAN" />
      </div>

    </div>
    </div>
  </section>
  <!-- akhir galery -->

  <!-- help -->
  <section id="help" class="bg-slate-500 ps-5 pb-10 mt-20">
    <h2 class="text-3xl font-bold text-white pt-10 pb-5 ms-5 text-center lg:text-7xl lg:font-extrabold">Help Me!</h2>
    <p class="text-center text-xs text-white lg:text-base">Anda memiliki kritik, saran, atau pertanyaan? Isi formulir dibawah dan dapatkan jawaban melalui Email anda</p>

    <div class="form flex justify-center">
      <form action="help.php" method="post">
        <?php
        if (isset($_GET['sukses'])) : ?>
          <div class="max-w-8  p-5 my-5 m-auto rounded-lg border border-teal-950 bg-green-300 shadow-xl">
            <h2 class="text-lg font-bol text-teal-800 text-center">Data Berhasil Dikirim. <br> Terimakasih atas <br>masukan/saran/pertanyaan anda</h2>
          </div>
        <?php endif; ?>

        <label for="nama" class="text-lg text-slate-900 font-bold block mt-3 lg:text-2xl"> Nama Anda</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" required autocomplete="off" class="w-64 rounded-md lg:w-80" />

        <label for="email" class="text-lg text-slate-900 font-bold block mt-3 lg:text-2xl">Email Anda</label>
        <p class="text-white text-xs font-thin">Pastikan email yang anda masukkan aktif</p>
        <input type="email" name="email" placeholder="Masukkan Email Aktif" required autocomplete="off" class="w-64 rounded-md lg:w-80" />

        <label for="saran" class="text-lg text-slate-900 font-bold block mt-3 lg:text-2xl">Kritik / Saran / Pertanyaan</label>
        <textarea name="saran" placeholder="Tuliskan Disini" required autocomplete="off" class="w-64 rounded-md lg:w-80 lg:h-24"></textarea>

        <button type="submit" name="submit" class="block m-auto bg-cyan-950 text-white mt-3 py-2 px-5 rounded-full hover:scale-110 hover:text-cyan-950 hover:bg-white hover:font-extrabold lg:text-xl">Kirim</button>
      </form>
    </div>

    <div class="m-auto">
      <p class="text-center text-sm text-white mt-8 lg:text-xl">Jika anda membutuhkan jawaban cepat, ajukan pertanyaan melalui <span class="text-cyan-900 font-bold text-lg lg:text-2xl">media sosial</span> kami.</p>
      <div class="sosmed mt-5 flex justify-center">
        <a href="https://wa.me/6281264416901" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../img/Whatsapp.png" alt="Whatsapp" /></a>
        <a href="https://instagram.com/permata.deco?igshid=OGQ5ZDc2ODk2ZA" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../img/Instagram.png" alt="Instagram" /></a>
        <a href="https://www.tiktok.com/@permatadeco?_t=8hKCYvh6R2v&_r=1" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../img/Tiktok.png" alt="tiktok" /></a>
        <!-- <a href="" class="block w-16 lg:w-24 hover:scale-110"><img src="../img/Twitter.png" alt="Whatsapp" /></a> -->
        <a href="https://www.facebook.com/ita.yuhasnita?mibextid=9R9pXO" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../img/Facebook.png" alt="facebook" /></a>
      </div>
    </div>
  </section>
  <!-- akhir help -->

  <footer class="py-5">
    <p class="text-white text-xs font-light text-center lg:text-base lg:font-normal">All Right Reserved, Copyrigth &copy; Create & Desain by <a href="https://instagram.com/permata.deco?igshid=OGQ5ZDc2ODk2ZA" target="_blank" class="text-cyan-300">Permata Party</a></p>
  </footer>

  <!-- script navbar -->
  <script>
    const menuToggle = document.querySelector(".menu-toggle input");
    const nav = document.querySelector("nav ul");

    menuToggle.addEventListener("click", function() {
      nav.classList.toggle("slide");
    });
  </script>

  <!-- script galery -->
  <script src="galery.js"></script>
</body>

</html>