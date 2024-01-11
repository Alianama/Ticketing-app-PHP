<?php
ob_start();
require('../config/koneksi.php');
require('../Component/component.php');


if (isset($_POST['id'])) {

    $id = intval($_POST['id']);


    $query = "DELETE FROM ticket WHERE id = ? LIMIT 1";
    $stmt = $conn->prepare($query);


    $stmt->bind_param("i", $id);


    $stmt->execute();


    if ($stmt->affected_rows > 0) {
        echo $succesPage;
        header("refresh:0.5; url=../index.php");
        exit();
    } else {
        echo '<strong>Deletion Failed</strong><br /><br />';
    }

    $stmt->close();
} else {
    echo '<strong>Invalid Request</strong><br /><br />';
}
$conn->close();
?>