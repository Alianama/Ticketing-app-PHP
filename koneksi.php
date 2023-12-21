<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ticketingdb";


$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["name"];
    $Kerusakan = $_POST["kerusakan"];
    $dateUpdate = $_POST["tanggal"];
    
    if  ($Kerusakan == '' || $Name == '') {
        echo "<script type='text/javascript'>alert('Legkapi data nya woy!!');</script>";
        exit();
    } else $sql = "INSERT INTO `ticket` (`name`, `kerusakan`, `date_update`) VALUES ('$Name', '$Kerusakan', '$dateUpdate')";

    
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

        
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

    
?>