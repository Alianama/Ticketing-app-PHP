<?php
require('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password menggunakan password_hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $query_check = "SELECT * FROM users WHERE username = '$username'";
    $result_check = mysqli_query($conn, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        $error_message = "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Tambahkan pengguna baru ke database
        $query_insert = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        $result_insert = mysqli_query($conn, $query_insert);

        if ($result_insert) {
            // Registrasi berhasil, redirect ke halaman login
            header('Location: login.php');
            exit;
        } else {
            $error_message = "Registrasi gagal. Silakan coba lagi.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Styles/login.css">
    <title>Register Page</title>
</head>

<body>
    <div class="login">
        <form class="login-form" action="" method="post">
            <h1>Registrasi Akun</h1>
            <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <input type="text" name="username" id="username" placeholder="Enter username" required>
            <input type="password" name="password" id="password" placeholder="Enter password" required>
            <button type="submit">Register</button>
        </form>
        <a href="login.php">Sudah Punya akun?</a>
    </div>
</body>

</html>