<?php

include "service/database.php";

$register_message = "";


if(isset($_POST["daftar"])) {
    $username = $_POST ["username"];
    $password = $_POST ["password"];

    $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

    if($db->query($sql)) {
      $register_message = "Daftar akun berhasil,silahkan login";  
  }else {
      $register_message = "username sudah dipakai";
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
      <h2>Silahkan Daftar</h2>
      <i><?= $register_message ?></i>
      <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="daftar">Daftar</button>
      </form>
        <a href="index.php">Kembali</a>

    </div>
  </body>
</html>
