<?php
ob_start();
require('../Component/component.php');
require('../config/koneksi.php');

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Assuming you have columns named 'status' and 'completion_date'
    $query = "UPDATE ticket SET complete = 0 WHERE id = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo $succesPage;
        header("refresh:1; url=../index.php");
        exit();
    } else {
        echo '<strong>Failed</strong><br /><br />';
    }

    $stmt->close();
} else {
    echo '<strong>Invalid Request</strong><br /><br />';
}

$conn->close();
?>