<?php
require('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil password dari database berdasarkan username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Verifikasi password menggunakan password_verify
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        } else {
            // Login gagal
            $error_message = "Username atau password salah";
        }
    } else {
        // Login gagal
        $error_message = "Username atau password salah";
    }
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
            <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <label for="username">Masukkan Username</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Masukkan Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Login</button>
        </form>
        <a href="register.php">Belum Punya akun?</a>
    </div>
</body>

</html>