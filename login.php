<?php

require('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];


}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div class="login">
        <form action="" method="post">
            <h1>Selamat Datang!</h1>
            <label for="username">Masukan Username</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Masukan Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Login</button>
        </form>
        <a href="">Belum Punya akun?</a>
    </div>



</body>

</html>