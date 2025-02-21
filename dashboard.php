<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Mobil Tjkt</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/dashboard.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Rentalmobil<span>TJKT</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

    </nav>
    <!-- Navbar end -->


    <!-- Hero Section star -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Ayo Rental <span>Mobil</span></h1>
        <p></p>
        <a href="rental.php" class="cta">Rental Sekarang</a>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa Memilih Mobil Kami</h3>
          <p>
          RENTALMOBILTJKT memberikan kendaraan berkualitas terbaik yang selalu siap untuk memenuhi kebutuhan transportasi Anda.
          </p>
          <p>
          melayani sewa mobil seperti sewa mobil harian, sewa mobil mingguan, sewa mobil bulanan dan sewa mobil tahunan.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2><span>List</span> Mobil</h2>
      <p>
        Ini addalah pilihan mobil yang bisa anda sewa klik tombol "RENTAL SEKARANG" di HOME untuk menyewa
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/gtr.img.jpg" alt="Nissan GTR" class="menu-card-img" />
          <h3 class="menu-card-title">-Nissan GTR-</h3>
          <p class="menu-card-price">Ready</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/merce.img.jpg" alt="Mercedes" class="menu-card-img" />
          <h3 class="menu-card-title">-Mercedes Benz-</h3>
          <p class="menu-card-price">Ready</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/supra.img.jpg" alt="Toyota Supra" class="menu-card-img" />
          <h3 class="menu-card-title">-Toyota Supra-</h3>
          <p class="menu-card-price">Ready</p>
        </div>
      </div>
    </section>
    <!-- Menu Section end -->

    <!-- Contact Section Start-->

    <?php

include "service/dbdashboard.php";

$register_mesage = "";

if(isset($_POST["kirim"])) {
  $nama = $_POST ["nama"];
  $email = $_POST ["email"];
  $nomor = $_POST ["nomor"];

  $sql = "INSERT INTO buyer (nama, email, nomor) VALUES ('$nama','$email','$nomor')";

  if($db->query($sql)) {
    $register_message = "Daftar akun berhasil,silahkan login";  
}else {
    $register_message = "username sudah dipakai";
 }
}

?>

    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        silahkan datang ke-tempat kami atau anda bisa mengirimmkan kontak anda kepada kami
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26597.42485007724!2d108.4637756993646!3d-7.712001852847065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65bfd43195b591%3A0xdaca59e2dcba0265!2sCijulang%2C%20Kondangjajar%2C%20Kec.%20Cijulang%2C%20Kab.%20Pangandaran%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736739707498!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="dashboard.php" method="POST">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="nama" placeholder="nama lengkap"/>
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" name="email" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" name="nomor" placeholder="Nomor hp" />
          </div>
          <div class="btn">
            <button type="submit" name="Kirim">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Contact Section end-->

    <!-- Footer start-->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#Menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created By <a href="https://www.instagram.com/yarslx__?igsh=MXo0ZWJvc3Z2aXp4">Dudi Tiar</a>. | &copy; 2025</p>
      </div>
    </footer>

    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
