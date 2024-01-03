<?php 
 ob_start();
 require('Component/component.php');



require('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["name"];
    $Kerusakan = $_POST["kerusakan"];
    $dateUpdate = $_POST["tanggal"];
    
    if  ($Kerusakan == '' || $Name == '') {
        echo "<script type='text/javascript'>alert('Legkapi data nya woy!!');</script>";
        exit();
    } else $sql = "INSERT INTO `ticket` (`name`, `kerusakan`, `date_update`) VALUES ('$Name', '$Kerusakan', '$dateUpdate')"; 
    
    
    
    if ($conn->query($sql) === TRUE) {
        echo $succesPage;
        
        header("refresh:1; url=index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




?>