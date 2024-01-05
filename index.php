<?php
require('koneksi.php');

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Assets/style.css">
    <script src="Assets/script.js"></script>
    <title>Ticketing System</title>
</head>

<body>
    <header>
        <div class="title">
            <img src="Assets/icon/artience.svg" alt="Artience" width="200px">
        </div>
        <form class="search" action="">
            <input type="text" name="Seacrh" id="search">
            <button type="submit"><img class="search-icon" src="Assets/Icon/serach.svg" width="20px"></button>
        </form>
    </header>

    <main>


        <div class="menu-input">
            <h1>Masukan Data</h1>

            <button class="btn-show-form" id="show-form">+Add Ticket</button>
        </div>
        <div class="data-menu">
            <div class="belum-dikerjakan" id="belum-dikerjakan">
                <h3>Belum Dikerjakan</h3>
                <a href="print.php">Print</a>
                <?php
                $selectQuery = "SELECT * FROM `ticket` WHERE `complete` = '0'";
                $result = $conn->query($selectQuery);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        
                        echo "<div class='item-list' id='" . $row["id"] . "'>" .
                        "<h1 id='name-" . $row["id"] . "' value='" . $row["name"] . "'>" . $row["name"] . "</h1>" .
                            "<h1 id='kerusakan-" . $row["id"] . "' value='" . $row["kerusakan"] . "'>" . $row["kerusakan"] . "</h1> " .
                            "<h1 id='tanggal-" . $row["id"] . "' value='" . $row["date_update"] . "'>" . $row["date_update"] . "</h1> " .
                            "<div class='actions'> " .
                            "<button type='button' class='delete-btn' id='delete-btn' style='background-color: #3a4d39; color: #ffffff; width:40px; height:40px; border: none; cursor: pointer;'><img src='Assets/icon/delete.svg' alt='delete' width='30px'></button>" .
                            "<button type='button' class='edit-btn' id='edit-btn' name='edit' style='background-color: #3a4d39; color: #ffffff; width:40px; height:40px; border: none; cursor: pointer;'><img id='" . $row["id"] . "'  src='Assets/icon/edit.svg' alt='edit' width='30px'></button>" .
                            "<form method='post' action='complete.php'>" .
                            "<input type='hidden' name='id' value='" . $row["id"] . "'>" .
                            "<button type='submit' class='complete-btn' name='complete' style='background-color: #3a4d39; color: #ffffff; width:40px; height:40px; border: none; cursor: pointer;'><img src='Assets/icon/complete.svg' alt='complete' width='30px'></button>" .
                            "</form>" .
                            "</div>" .
                            "</div>";
                }
            } else {
                echo "Tidak ada list Ticket";
            }
            ?>

            </div>
            <div class="sudah-dikerjakan" id="sudah-dikerjakan">
                <h3>Sudah Dikerjakan</h3>
                <?php
                
                $selectQuery = "SELECT * FROM `ticket` WHERE `complete` = '1'";
                $result = $conn->query($selectQuery);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='item-list' id='" . $row["id"] . "'>" .
                        "<h1 id='name-" . $row["id"] . "' value='" . $row["name"] . "'>" . $row["name"] . "</h1>" .
                            "<h1 id='kerusakan-" . $row["id"] . "' value='" . $row["kerusakan"] . "'>" . $row["kerusakan"] . "</h1> " .
                            "<h1 id='tanggal-" . $row["id"] . "' value='" . $row["date_update"] . "'>" . $row["date_update"] . "</h1> " .
                            "<div class='actions'> " .
                            "<button type='button' class='delete-btn' id='delete-btn' style='background-color: #3a4d39; color: #ffffff; width:40px; height:40px; border: none; cursor: pointer;'><img src='Assets/icon/delete.svg' alt='delete' width='30px'></button>" .
                            "<button type='button' class='edit-btn' id='edit-btn' name='edit' style='background-color: #3a4d39; color: #ffffff; width:40px; height:40px; border: none; cursor: pointer;'><img id='" . $row["id"] . "'  src='Assets/icon/edit.svg' alt='edit' width='30px'></button>" .
                            "<form method='post' action='uncomplete.php'>" .
                            "<input type='hidden' name='id' value='" . $row["id"] . "'>" .
                            "<button type='submit' class='uncomplete-btn' name='uncomplete' style='background-color: #3a4d39; color: #ffffff; width:40px; height:40px; border: none; cursor: pointer;'><img src='Assets/icon/uncomplete.svg' alt='uncomplete' width='30px'></button>" .
                            "</form>" .
                            "</div>" .
                            "</div>";
                }
            } else {
                echo "Tidak ada list Ticket";
            }
            ?>


            </div>



        </div>



    </main>

    <div class="menu-form" id="menu-form" style="display: none;">
        <form id="form-input" method="post" action="add.php">
            <label for="name">Masukan Nama</label>
            <input type="text" name="name" id="name" placeholder="Ali Purnama" required>
            <label for="kerusakan">Detail kerusakan</label>
            <input type="text" name="kerusakan" id="kerusakan" placeholder="Komputer Mati" required>
            <label for="tanggal">Tanggal kerusakan</label>
            <input type="date" name="tanggal" id="tanggal" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="edit-form" id="edit-form" style="display: none;">
        <form id="form-input" method="post" action="edit.php">
            <input type="hiden" name="id" id="edit-id" style="display: none;">
            <label for="name">Masukan Nama</label>
            <input type="text" name="name" id="new-name">
            <label for="kerusakan">Detail kerusakan</label>
            <input type="text" name="kerusakan" id="new-kerusakan" required>
            <label for="tanggal">Tanggal kerusakan</label>
            <input type="date" name="tanggal" id="new-tanggal" required>
            <button type="submit">Update</button>
        </form>
    </div>

    <div class="delete-modal" id="delete-modal" style="display: none;">
        <div class="delete-container">
            <h1>Delete This Ticket?</h1>
            <form class="action-delete" method="post" action="delete.php" id="delete-form">
                <input type="hidden" name="id" id="delete-id">
                <button type="button" id="cancel-delete">Cancel</button>
                <button type="submit" id="yes-delete">Yes</button>
            </form>
        </div>
    </div>
    <a href="logout.php">Logout</a>
</body>

</html>