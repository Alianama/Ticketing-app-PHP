<?php
require('koneksi.php')

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
            <h1>TOYOINK</h1>
        </div>
        <form class="search" action="">
            <input type="text" name="Seacrh" id="search">
            <button type="submit"><img class="search-icon" src="Assets/Icon/serach.svg" width="20px"></button>
        </form>
    </header>

    <main>


        <div class="menu-input">
            <h1>Masukan Data</h1>
            <button class="btn-show-form" id="show-form">+Add Data</button>
        </div>
        <div class="data-menu">
            <div class="belum-dikerjakan" id="belum-dikerjakan">
                <h3>Belum Dikerjakan</h3>
                <?php
                $selectQuery = "SELECT * FROM `ticket` WHERE `complete` = '0'";
                $result = $conn->query($selectQuery);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='item-list' id='" . $row["id"] . "'>" . "<h1>" . $row["name"] . "</h1> " . "<h1>" . $row["kerusakan"] . "</h1> " . "<h1>" . $row["date_update"] . "</h1> " . "<div class='actions'> " . "<button>" . "</button>" . " </div>" . "</div>";

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
                        echo "<div class='item-list' id='" . $row["id"] . "'>" . "<h1>" . $row["name"] . "</h1> " . "<h1>" . $row["kerusakan"] . "</h1> " . "<h1>" . $row["date_update"] . "</h1> " . "<div class='actions'> " . "<button>" . "</button>" . " </div>" . "</div>";   

                }
            } else {
                echo "Tidak ada list Ticket";
            }
            ?>


            </div>
        </div>



    </main>

    <div class="menu-form" id="menu-form" style="display: none;">
        <form id="form-input" method="post">
            <label for="name">Masukan Nama</label>
            <input type="text" name="name" id="name" placeholder="Ali Purnama" required>
            <label for="kerusakan">Detail kerusakan</label>
            <input type="text" name="kerusakan" id="kerusakan" placeholder="Komputer Mati" required>
            <label for="tanggal">Tanggal kerusakan</label>
            <input type="date" name="tanggal" id="tanggal" required`>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>