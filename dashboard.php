<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika tidak ada sesi
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Selamat datang, <?php echo $username; ?>!</h1>
    <p>Ini adalah halaman dashboard.</p>
    <a href="logout.php">Logout</a>
</body>

</html>