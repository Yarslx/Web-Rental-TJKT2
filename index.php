<?php
include "service/database.php";

if(isset($_POST["login"])) {
  $username = $_POST ["username"];
  $password = $_POST ["password"];

  $sql = "SELECT * FROM users WHERE username='$username' AND 
  password='$password'
  ";

  $result = $db->query($sql);

  if($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    header("location: dashboard.php");
  
  }else {
    echo "akun tidak ditemukan";
  }

}

?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="login-container">
      <h2>Silakan login</h2>

      <form action="index.php" method="POST">
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit" name="login">Login</button>
      </form>

      <p><a href="#">Lupa kata sandi Anda?</a></p>
      <p>Belum punya akun? <a href="register.php">Daftar sekarang</a>.</p>

      <script></script>

      <footer></footer>
    </div>
  </body>
</html>
