<?php

include "service/dbrental.php";

$register_mesage = "";

if(isset($_POST["kirim"])) {
  $username = $_POST["nama"];
  $carsname = $_POST ["carsname"];
  $pickupDate = $_POST ["pickupDate"];
  $returnDate = $_POST ["returnDate"];

  $sql = "INSERT INTO mobil_pick (nama, carsname, pickupDate, returnDate) VALUES ('$username','$carsname','$pickupDate','$returnDate')";

  if($db->query($sql)) {
    $register_message = "Berhasil";  
}else {
    $register_message = "Tidak Berhasil";
 }
}

?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Mobil</title>
    <link rel="stylesheet" href="css/rental.css" />
  </head>
  <body>
    <header>
        <div class="logo">
          <h1>Rental Mobil TJKT</h1>
        </div>
        <nav>
          <ul>
            <li><a href="dashboard.php">Home</a></li>
          </ul>
        </nav>
    </header>

    <section class="banner">
      <h2>Sewa Mobil Impian Anda Sekarang!</h2>
      <p>
        Pilih mobil yang Anda inginkan, tentukan tanggal, dan pesan sekarang!
      </p>
    </section>

    <section class="cars">
      <h2>Daftar Mobil</h2>
      <div class="car-list">
        <!-- Mobil 1 -->
        <div class="car">
          <img src="img/rental/supra.img.jpg" alt="Mobil 1" />
          <h3>Toyota Supra</h3>
          <p>Harga: Rp 2.500.000/hari</p>
          <button class="book-btn" onclick="openBookingForm('')">
            Pesan Sekarang
          </button>
        </div>
        <!-- Mobil 2 -->
        <div class="car">
          <img src="img/rental/gtr.img.jpg" alt="Mobil 2" />
          <h3>Nissan GTR</h3>
          <p>Harga: Rp 1.500.000/hari</p>
          <button class="book-btn" onclick="openBookingForm('')">
            Pesan Sekarang
          </button>
        </div>
        <!-- Mobil 3 -->
        <div class="car">
          <img src="img/rental/merce.img.jpg" alt="Mobil 3" />
          <h3>Mercendes-Benz</h3>
          <p>Harga: Rp 1.000.000/hari</p>
          <button class="book-btn" onclick="openBookingForm('')">
            Pesan Sekarang
          </button>
        </div>
      </div>
    </section>

    <!-- Form Pemesanan -->
    <div id="bookingForm" class="booking-form">
      <div class="form-container">
        <h2>Pemesanan Mobil</h2>
        <p>Nama Lengkap: <span id="selectedCar"></span></p>
        <form action="#" method="POST">
          <input type="text" placeholder="TulisNamaAnda" name="nama">
          <p>Nama Mobil: <span id=""></span></p>
        <input type="text" placeholder="CarsName" name="carsname">
          <label for="pickupDate">Pengambilan:</label>
          <input type="text" placeholder="01-01-2025" name="pickupDate" required />
          <label for="returnDate">Pengembalian:</label>
          <input type="text" placeholder="01-01-2026" name="returnDate" required />
          <button type="submit" name="kirim">Pemesanan</button>
        </form>
        <button class="close-btn" onclick="closeBookingForm()">Tutup</button>
      </div>
    </div>

     <!-- Footer start-->
     <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="credit">
        <p>Created By <a href="https://www.instagram.com/yarslx__?igsh=MXo0ZWJvc3Z2aXp4">Dudi Tiar</a>. | &copy; 2025</p>
      </div>
    </footer>

    <!-- Footer end -->

    <script src="js/rental.js"></script>
  </body>
</html>
