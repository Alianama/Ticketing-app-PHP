<?php
require('koneksi.php');

if (isset($_POST['edit'])) {
    $id = $_POST['id'];

    // Fetch data based on ID
    $selectQuery = "SELECT * FROM `ticket` WHERE `id` = $id";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $kerusakan = $row['kerusakan'];
        $tanggal = $row['date_update'];
    } else {
        // Handle error or redirect to appropriate page
        echo "Ticket not found!";
        exit;
    }
} else {
    // Handle error or redirect to appropriate page
    echo "Invalid request!";
    exit;
}

// Process the form submission for updating data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['new_name'];
    $newKerusakan = $_POST['new_kerusakan'];
    $newTanggal = $_POST['new_tanggal'];

    // Update data in the database
    $updateQuery = "UPDATE `ticket` SET `name`='$newName', `kerusakan`='$newKerusakan', `date_update`='$newTanggal' WHERE `id` = $id";
    if ($conn->query($updateQuery) === TRUE) {
        // Redirect to the main page or a success page
        header("Location: index.php");
        exit;
    } else {
        // Handle error
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>