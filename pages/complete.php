<?php
ob_start();
require('../Component/component.php');
require('../config/koneksi.php');

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Update 'complete' column to 1 and set 'date_update' to current date
    $query = "UPDATE ticket SET complete = 1, date_update = CURRENT_DATE WHERE id = ? LIMIT 1";

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