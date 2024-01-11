<?php
require('../config/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newKerusakan = $_POST['kerusakan'];
    $newTanggal = $_POST['tanggal'];

    $updateQuery = "UPDATE `ticket` SET `name`='$newName', `kerusakan`='$newKerusakan', `date_update`='$newTanggal' WHERE `id`='$id'";
    if ($conn->query($updateQuery) === TRUE) {
        header('Location: ../index.php');
        exit;
    } else {

        echo "Error updating record: " . $conn->error;
    }
} else {
    header('Location: ../index.php');
    exit;
}
?>